<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('model_login','userrole');
        
    }
    public function index()
    {
        $data['judul'] = "Login Page";
        $data['user'] = $this->db->get_where('tb_login', ['email_user' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/auth_header', $data);
        $this->load->view('auth/auth_login', $data);
        $this->load->view('layout/auth_footer', $data);
    }
    public function registrasi()
    {
        $data['judul'] = "Login Page";
        $this->load->view('layout/auth_header', $data);
        $this->load->view('auth/auth_registrasi', $data);
        $this->load->view('layout/auth_footer', $data);
    }
    public function cek_regis()
    {
        $data = [
            'nama_user' => htmlspecialchars($this->input->post('nama_user',true)),
            'email_user' => htmlspecialchars($this->input->post('email_user',true)),
            'password_user' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            'role_user' => "user",
            'tanggal_user' => date('Y/m/d'),
            'gambar_user' => 'default.jpg'
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat Akunmu Berhasil terdaftar, Silahkan Login ! </div>');
        redirect('admin/pegawai');
    }
    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_login',['email_user' => $email])->row_array();
        if ($user)
        {
            if (password_verify($password,$user['password_user']))
            {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah !</div>');
                redirect('auth');
            }
            else
            {
                $data = [
                    'email' => $user['email_user'],
                    'role'  => $user['role_user'],
                    'id' => $user['id_user'],
                ];
                $this->session->set_userdata($data);
                if ($user['role_user'] == 'admin') {
                    redirect('admin');
                } else {
                    redirect('pegawai');
                }
                
            }
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email belum Terdaftar, Silahkan Daftar</div>');
            redirect('auth');
        }
    }
    

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('messeage', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }


    public function test(){

        $date = time();
        echo $date;
    }
}
