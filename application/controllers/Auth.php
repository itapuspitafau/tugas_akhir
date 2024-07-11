<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');

    }

    public function index()
    {
        $data['judul'] = 'Halaman Admin';
        $this->load->view('login/index', $data);
    }


    public function aksi_login()
    {
        // username dan password menangkap inputan dari form
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //array kumpulan data yang tersimpan dalam satu variabel
        $where = array(
            'username' => $username,
            'password' => md5($password) //md5 : sebagai enkripsi password untuk lebih aman 
        );

        $cek = $this->M_login->cek_login("admin", $where)->num_rows();

        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            //session: menyimpan data di browser
            $this->session->set_userdata($data_session);

            redirect(base_url("Dashboard"));
        } else {
            echo "Username dan password salah !";
        }
    }
    public function logout()
    {
        $this->session->unset_userdata(
            array(
                'nama',
                'status',
            )
        );
        redirect(base_url('auth'));
    }


}