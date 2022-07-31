<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_menu');
        $this->load->model('model_kasir');
        $this->load->model('model_login');
        $this->load->model('model_pemesanan');
        $this->load->model('model_report');
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    // menu
    public function index()
    {
        $data['judul'] = "Pegawai Page";
        $data['menu'] = $this->model_menu->get();
        $data['kasir'] = $this->model_kasir->get();
        $data['user'] = $this->db->get_where('tb_login',['email_user'=> $this->session->userdata('email')])->row_array();
        $this->load->view('layout/pegawai_header',$data);
        $this->load->view('pegawai/pegawai_menu', $data);
        $this->load->view('layout/pegawai_footer', $data);
    }
    public function detaiMenu($id)
    {
        $data['judul'] = "Pegawai Page";
        $data['menu'] = $this->model_menu->getById($id);
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();

        $this->load->view('layout/pegawai_header', $data);
        $this->load->view('pegawai/pegawai_detai_menu', $data);
        $this->load->view('layout/pegawai_footer', $data);
    }
    public function uploadDetail(){
        $data = [
            'id_kasir ' => $this->input->post('id_kasir'),
            'id_menu '=> $this->input->post('id_menu'),
            'jumlah' => $this->input->post('jumlah'),
            'total' => $this->input->post('total'),
            'id_user' => $this->input->post('id_user'),
            'tanggal' => $this->input->post('tanggal'),
            'status' => $this->input->post('status'),
        ];
        $this->model_kasir->insert($data);
        redirect('pegawai/kasir');
    }

    public function kasir()
    {
        $data['judul'] = "Pegawai Page";
        $data['kasir'] = $this->model_kasir->get();
        $data['menu'] = $this->model_menu->get();
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/pegawai_header', $data);
        $this->load->view('pegawai/pegawai_kasir', $data);
        $this->load->view('layout/pegawai_footer', $data);
    }
    public function penjualan()
    {
        $data['judul'] = "Pegawai Page";
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['kasir'] = $this->model_kasir->get();
        $data['penjualan'] = $this->model_pemesanan->get();
        $this->load->view('layout/pegawai_header', $data);
        $this->load->view('pegawai/pegawai_penjualan', $data);
        $this->load->view('layout/pegawai_footer', $data);
    }

    public function uploadPenjualan()
    {
        $data = [
            'id_kasir' => $this->input->post('id_kasir'),
            'tanggal_pemesanan' => $this->input->post('tanggal'),
            'nama_pemesanan' => $this->input->post('nama_pembeli'),
            'total_harga' => $this->input->post('total'),
            'status'=> "dibayar",
        ];
        $this->model_pemesanan->insert($data);
        $status = 'dipesan';
        $this->model_kasir->delete_all($status);
        redirect('pegawai/penjualan');

        // if ($this->model_pemesanan->insert($data)==true) {
        //     $id_us = 'dibayar';
        //     $this->model_kasir->delete_all($id_us);
        //     redirect('pegawai/penjualan');
        // } else {
        //     redirect('pegawai/penjualan');
        // }
    }
    public function report()
    {
        $data['judul'] = "Pegawai Page";
        $data['report'] = $this->model_report->get();
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/pegawai_header', $data);
        $this->load->view('pegawai/pegawai_report', $data);
        $this->load->view('layout/pegawai_footer', $data);
    }
    public function uploadReport()
    {
        $data = [
            'nama_report' => $this->input->post('nama'),
            'tanggal_report' => $this->input->post('tanggal'),
            'file_report' => $this->input->post('file'),
        ];
        $this->model_report->insert($data);
        redirect('pegawai/report');
    }

    public function export()
    {
        $data['penjualan'] = $this->model_pemesanan->get();
        $this->data['title'] = 'Laporan Data Penjualan';
        $paper_sz = 'A4';
        $orientation = 'Potrait';
        $this->dompdf->setPaper($paper_sz,$orientation);
        $html = $this->load->view('pegawai/report_penjualan', $this->data, true);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }

    public function print()
    {
        $data['penjualan'] = $this->model_pemesanan->get();
        $this->load->view('pegawai/print_penjualan', $data);
    }
    public function test($id)
    {

        $data = $this->model_kasir->get();
        var_dump($data['kasir']);
    }
    
}
