<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
    public function index()
    {
        $data ['judul'] = "Administrator Page";
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = 
        $this->load->view('layout/admin_header',$data);
        $this->load->view('admin/admin_dashboard' ,$data);
        $this->load->view('layout/admin_footer', $data);
    }
    public function penjualan()
    {
        $data['judul'] = "Administrator Page";
        $data['penjualan'] = $this->model_pemesanan->get();
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/admin_header', $data);
        $this->load->view('admin/admin_Penjualan', $data);
        $this->load->view('layout/admin_footer', $data);
    }
    
    public function pegawai()
    {
        $data['judul'] = "Administrator Page";
        $data['pegawai'] = $this->model_login->get();
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/admin_header', $data);
        $this->load->view('admin/admin_pegawai', $data);
        $this->load->view('layout/admin_footer', $data);
    }
     

    public function pegawaiHapus($id)
    {
        $this->model_login->delete($id);
        redirect('admin/pegawai');
    }
    public function report()
    {
        $data['judul'] = "Administrator Page";
        $data['report'] = $this->model_report->get();
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/admin_header', $data);
        $this->load->view('admin/admin_report', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    // menu
    public function menu()
    {
        $data['judul'] = "Administrator Page";
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->model_menu->get();
        $this->load->view('layout/admin_header', $data);
        $this->load->view('admin/admin_menu', $data);
        $this->load->view('layout/admin_footer', $data);
    }
    public function tambahMenu()
    {
        $data['judul'] = "Administrator Page";
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/admin_header', $data);
        $this->load->view('admin/admin_tambah_menu', $data);
        $this->load->view('layout/admin_footer', $data);
    }
    public function hapusMenu($id)
    {
        $this->model_menu->delete($id);
        redirect('admin/menu');
    }
    public function UploadMenu()
    {
        $data= [
            'gambar_menu' => $this->input->post('gambar_menu'),
            'nama_menu' => $this->input->post('nama_menu') ,
            'kategori_menu' => $this->input->post('kategori_menu'),
            'harga_menu' => $this->input->post('harga_menu') ,
            'deskripsi_menu' => $this->input->post('deskripsi_menu'),
        ];
        $this->model_menu->insert($data);
        redirect('admin/menu');
    }
    public function editMenu($id)
    {
        $data['judul'] = "Administrator Page";
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->model_menu->getById($id);
        $this->load->view('layout/admin_header', $data);
        $this->load->view('admin/admin_edit_menu', $data);
        $this->load->view('layout/admin_footer', $data);
    }
    public function updateMenu()
    {
        $data = [
            'gambar_menu' => $this->input->post('gambar_menu'),
            'nama_menu' => $this->input->post('nama_menu'),
            'kategori_menu' => $this->input->post('kategori_menu'),
            'harga_menu' => $this->input->post('harga_menu'),
            'deskripsi_menu' => $this->input->post('deskripsi_menu'),
        ];
        $id = $this->input->post('id_menu');
        $this->model_menu->update(['id_menu'=>$id],$data);
        redirect('admin/menu'); 
    }


    
}
