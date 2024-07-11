<?php

class Produk_model extends CI_model
{
    public function getAllSiswa()
    {
        return $this->db->get('produk')->result_array();
    }

}