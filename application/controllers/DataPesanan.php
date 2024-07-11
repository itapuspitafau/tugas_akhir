<?php
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DataPesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pesanan');
        $this->load->model('M_transaksi');
        $this->load->helper('url');
    }
    public function index($nama = '')
    {
        $data['judul'] = 'Data Pesanan';
        $data['nama'] = $nama;
        $data['active'] = 'data pesanan';
        $data['pesanan'] = $this->M_transaksi->get_data_transaksi();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('pemesan/data_pesanan', $data);
        $this->load->view('templates/admin/footer');
    }

    public function detail($nama = '')
    {
        $data['judul'] = 'Detail Pesanan';
        $data['nama'] = $nama;
        $data['active'] = 'data pesanan';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('pemesan/detail_pesanan', $data);
        $this->load->view('templates/admin/footer');
    }
    function hapus($id)
    {
        $where = array('id_transaksi' => $id);
        $this->M_transaksi->hapus_pesanan($where);
        redirect('Datapesanan');
    }
    public function eksport()
    {

        $fileName = 'Laporan Akhir.xlsx';
        $eksport = $this->M_transaksi->get_data_transaksi();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Kode Transaksi');
        $sheet->setCellValue('B1', 'Nama Pembeli');
        $sheet->setCellValue('C1', 'No.Hp');
        $sheet->setCellValue('D1', 'Nama Produk');
        $sheet->setCellValue('E1', 'Jumlah Produk');
        $sheet->setCellValue('F1', 'Total Bayar');
        $rows = 2;
        foreach ($eksport as $val) {
            $sheet->setCellValue('A' . $rows, $val->id_transaksi);
            $sheet->setCellValue('B' . $rows, $val->nama_pembeli);
            $sheet->setCellValue('C' . $rows, $val->no_hp);
            $sheet->setCellValue('D' . $rows, $val->nama_produk);
            $sheet->setCellValue('E' . $rows, $val->jmlh_produk);
            $sheet->setCellValue('F' . $rows, $val->total_bayar);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("uploads/" . $fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url() . "/uploads/" . $fileName);
    }

}