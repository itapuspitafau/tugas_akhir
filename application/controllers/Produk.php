<?php

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
        $this->load->model('M_pembeli');
        $this->load->model('M_transaksi');
        $this->load->library('midtrans');
    }

    public function index($nama = '')
    {
        // mengambil seluruh data produk
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $data['judul'] = 'produk';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/produk', $data);
        $this->load->view('templates/footer');
    }

    public function detail($idProduk)
    {
        $data['produk'] = $this->M_produk->getWhere($idProduk)->row();
        $data['allproduk'] = $this->M_produk->tampil_data()->result();
        $data['judul'] = 'detail produk';
        $this->load->view('templates/header', $data);
        $this->load->view('home/detail-produk', $data);
        $this->load->view('templates/footer');
    }

    public function beli($idProduk)
    {
        $data['produk'] = $this->M_produk->getWhere($idProduk)->row();
        $data['judul'] = 'beli produk';
        $this->load->view('templates/header', $data);
        $this->load->view('home/beli-produk', $data);
        $this->load->view('templates/footer');
    }

    public function proses_beli($idProduk)
    {
        // menangkap data pembeli dari form
        $nama_pembeli = $this->input->post('nama_pembeli');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');

        // menyimpan data pembeli ke variabel data pembeli
        $data_pembeli = [
            'nama_pembeli' => $nama_pembeli,
            'alamat' => $alamat,
            'email' => $email,
            'no_hp' => $no_hp,
        ];

        // menyimpan data pembeli ke database
        $pembeli = $this->M_pembeli->input_data($data_pembeli);

        // mengambil id pembeli yang baru saja ditambahkan
        $id_pembeli = $this->db->insert_id();

        // menangkap jumlah pesanan dari form
        $jumlah_pesanan = $this->input->post('jumlah_pesanan');

        // mengambil data produk berdasarkan id produk
        $produk = $this->M_produk->getWhere($idProduk)->row();

        // menghitung harga produk dengan jumlah_pesanan
        $total_harga = $jumlah_pesanan * $produk->harga_produk;

        // mengurangi stok produk
        $this->M_produk->kurangi_stok($idProduk, $jumlah_pesanan);

        // mengambil kode transaksi
        $kode_transaksi = $this->M_transaksi->generate_kode_transaksi();

        // menyimpan data transaksi ke variable data transaksi
        $data_transaksi = [
            'id_transaksi' => $kode_transaksi,
            'id_pembeli' => $id_pembeli,
            'id_produk' => $idProduk,
            'tgl_transaksi' => date('Y-m-d'),
            'jmlh_produk' => $jumlah_pesanan,
            'total_bayar' => $total_harga,
            'status' => 'Belum Bayar',
        ];

        // Menyimpan data transaksi
        $this->M_transaksi->input_data($data_transaksi);


        // mengembalikan ke halaman form
        redirect(base_url('produk/checkout/' . $kode_transaksi));
    }

    public function checkout($idTransaksi)
    {
        $data['trans'] = $this->M_transaksi->getDetailTransaksi($idTransaksi);

        $params = array(
            'transaction_details' => array(
                'order_id' => $data['trans'][0]->id_transaksi,
                'gross_amount' => $data['trans'][0]->total_bayar
            ),
            'customer_details' => array(
                'first_name' => $data['trans'][0]->nama_pembeli,
                'email' => $data['trans'][0]->email,
                'phone' => $data['trans'][0]->no_hp
            )
        );

        $snapToken = $this->midtrans->getSnapToken($params);

        $this->load->view('home/checkout', array('snapToken' => $snapToken, 'idProduk' => $data['trans'][0]->id_produk, 'idtransaksi' => $idTransaksi));
    }

    public function transaksiBerhasil($idProduk, $idtransaksi)
    {
        $this->session->set_flashdata('success', 'success');

        $this->M_transaksi->update_data(["id_transaksi" => $idtransaksi], ['status' => 'lunas']);

        // mengembalikan ke halaman form
        redirect(base_url('produk/beli/' . $idProduk));
    }

    public function transaksiGagal($idProduk, $idtransaksi)
    {
        $this->session->set_flashdata('failed', 'failed');
        $this->M_transaksi->update_data(["id_transaksi" => $idtransaksi], ['status' => 'canceled']);

        // mengembalikan ke halaman form
        redirect(base_url('produk/beli/' . $idProduk));
    }
    public function eksport()
    {
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $this->load->view('produk/export', $data);
    }
}