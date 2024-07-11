<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
        $this->load->model('M_transaksi');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Dashboard';
        $data['stok'] = $this->M_produk->hitung_produk();
        $data['terjual'] = $this->M_transaksi->terjual();
        $data['transaksi'] = $this->M_transaksi->hitung_transaksi();
        $data['active'] = 'dashboard';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('templates/admin/footer', $data);
    }


}