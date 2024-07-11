<?php

class M_produk extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('produk');
    }

    function input_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function getWhere($idProduk)
    {
        $this->db->where('id_produk', $idProduk);
        return $this->db->get('produk');
    }

    public function kurangi_stok($id_produk, $jumlah_pembelian)
    {
        // Mengambil stok produk saat ini
        $stok_produk = $this->db->get_where('produk', ['id_produk' => $id_produk])->row()->stok_produk;

        // Mengurangi stok produk sesuai dengan jumlah pembelian
        $stok_baru = $stok_produk - $jumlah_pembelian;

        // Memperbarui stok produk di database
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', ['stok_produk' => $stok_baru]);

        return $stok_baru;
    }
    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('produk'); //produk=tabel
    }
    function update_data($whare, $data)
    {

        $this->db->where($whare);
        $this->db->update('produk', $data);
    }
    function hitung_produk()
    {
        $this->db->select_sum("stok_produk");
        $quary = $this->db->get("produk");
        $hasil = $quary->row();
        return $hasil->stok_produk;
    }
}