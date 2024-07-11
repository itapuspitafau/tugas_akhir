<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
    }
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    public function profile($nama = '')
    {
        $data['judul'] = 'profile';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/profile', $data);
        $this->load->view('templates/footer');
    }

}