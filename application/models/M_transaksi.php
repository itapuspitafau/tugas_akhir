<?php

class M_transaksi extends CI_model
{
    public function input_data($data)
    {
        return $this->db->insert('transaksi', $data);
    }

    public function generate_kode_transaksi()
    {
        // Mendapatkan tanggal saat ini
        $tanggal = date('dmY');

        // Mendapatkan nomor urut terakhir dari database
        $query = $this->db->query("SELECT MAX(SUBSTRING(id_transaksi, 1, 3)) AS max_urut FROM transaksi");
        $result = $query->row();
        $max_urut = $result->max_urut;

        // Mengecek apakah sudah ada transaksi sebelumnya
        if ($max_urut != null) {
            // jika ada maka nomor urut ditambah satu
            $nomor_urut = intval($max_urut) + 1;
        } else {
            $nomor_urut = 1;
        }

        // Mengonversi nomor urut menjadi format tiga digit dengan leading zeros
        $nomor_urut_formatted = sprintf("%03d", $nomor_urut);

        // Menggabungkan nomor urut dengan tanggal untuk membentuk kode transaksi
        $kode_transaksi = $nomor_urut_formatted . $tanggal;

        return $kode_transaksi;
    }

    public function get_data_transaksi()
    {
        $this->db->select('transaksi.*, pembeli.*, produk.*');
        $this->db->from('transaksi');
        $this->db->join('pembeli', 'pembeli.id_pembeli = transaksi.id_pembeli', 'left');
        $this->db->join('produk', 'produk.id_produk = transaksi.id_produk', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDetailTransaksi($idTransaksi)
    {
        $this->db->select('transaksi.*, pembeli.*, produk.*');
        $this->db->from('transaksi');
        $this->db->join('pembeli', 'pembeli.id_pembeli = transaksi.id_pembeli', 'left');
        $this->db->join('produk', 'produk.id_produk = transaksi.id_produk', 'left');
        $this->db->where(['transaksi.id_transaksi' => $idTransaksi]);
        $query = $this->db->get();
        return $query->result();
    }

    function hapus_pesanan($where)
    {
        $this->db->where($where);
        $this->db->delete('transaksi');
    }

    function update_data($whare, $data)
    {

        $this->db->where($whare);
        $this->db->update('transaksi', $data);
    }
    function terjual()
    {
        // hitung jmlh_produk dimana status memiliki nilai lunas dari table transaksi
        $this->db->select_sum("jmlh_produk");
        $this->db->where("status", "lunas");
        $quary = $this->db->get("transaksi");
        $hasil = $quary->row();
        return $hasil->jmlh_produk;
    }
    function hitung_transaksi()
    {

        $this->db->where("status", "lunas");
        $this->db->from("transaksi");
        return $this->db->count_all_results();
    }

}