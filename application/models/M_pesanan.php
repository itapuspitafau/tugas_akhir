<?php

class M_pesanan extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('transaksi');
    }
}