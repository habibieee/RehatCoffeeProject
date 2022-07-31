<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class model_pemesanan extends CI_Model
{
    public $table = 'tb_pemesanan';
    public $id = 'tb_pemesanan.id_pemesanan';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        // $this->db->select('*');
        // $this->db->from('tb_kasir');
        // $this->db->join('tb_pemesanan','tb_pemesanan.id_kasir = tb_kasir.id_kasir');
        // $query = $this->db->get();
        // return $query->result_array();
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('email_user', $this->session->userdata('email_user'));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
