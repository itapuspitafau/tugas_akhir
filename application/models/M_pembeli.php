<?php

class M_pembeli extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('pembeli');
    }

    function input_data($data)
    {
        $this->db->insert('pembeli', $data);
    }

}