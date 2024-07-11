<?php

class ProdukAdmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Dashboard';
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $data['active'] = 'data produk';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('produk/data_produk', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman Dashboard';
        $data['active'] = 'data produk';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('produk/tambah', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    function tambah_aksi()
    {
        // menangkap semua inputan dari form
        $nama = $this->input->post('nama_produk');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga_produk');
        $stok = $this->input->post('stok_produk');

        // Konfigurasi upload path dan properties
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 10000;
        $config['max_width'] = '10000';
        $config['max_height'] = '10000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        // jika ada gambar maka lakukan simpan gambar dan ambil nama file
        if ($this->upload->do_upload('gambar')) {
            $image = $this->upload->data();
            $gambar = $image['file_name'];
        } else {
            $data['error'] = $this->upload->display_errors();
            $gambar = '';
        }

        // menyimpan semua data yang ada ke variable data
        $data = array(
            'nama_produk' => $nama,
            'deskripsi' => $deskripsi,
            'harga_produk' => $harga,
            'stok_produk' => $stok,
            'gambar' => $gambar,
        );

        // menyimpan data ke database
        $this->M_produk->input_data('produk', $data);
        // mengalihkan ke halaman produk
        redirect(base_url("ProdukAdmin"));
    }
    function hapus($id)
    {
        $where = array('id_produk' => $id);
        $this->M_produk->hapus_data($where);
        redirect('ProdukAdmin');
    }
    public function edit($idproduk)
    {
        $data['judul'] = 'Halaman Dashboard';
        $data['produk'] = $this->M_produk->getWhere($idproduk)->row();
        $data['active'] = 'data produk';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('produk/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }
    public function update($id)
    {
        $nama = $this->input->post('nama_produk');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga_produk');
        $stok = $this->input->post('stok_produk');

        $data = array(
            'nama_produk' => $nama,
            'deskripsi' => $deskripsi,
            'harga_produk' => $harga,
            'stok_produk' => $stok,
        );

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 10000;
        $config['max_width'] = '10000';
        $config['max_height'] = '10000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {



            $image = $this->upload->data();
            $data['gambar'] = $image['file_name'];
        }


        $where = array('id_produk' => $id);
        $this->M_produk->update_data($where, $data);
        redirect('ProdukAdmin');
    }

}