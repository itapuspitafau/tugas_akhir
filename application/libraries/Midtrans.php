<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/midtrans/Midtrans.php';

class Midtrans
{
    private $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->config->load('midtrans'); // Menggunakan metode config->load() untuk memuat konfigurasi
        $this->midtrans = new Midtrans\Snap();
        $this->midtrans->serverKey = $this->ci->config->item('server_key'); // Mengambil server key dari konfigurasi
        $this->midtrans->clientKey = $this->ci->config->item('client_key'); // Mengambil client key dari konfigurasi
    }

    public function getSnapToken($params)
    {
        return $this->midtrans->getSnapToken($params);
    }
}
