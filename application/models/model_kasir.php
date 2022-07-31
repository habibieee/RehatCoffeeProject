<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class model_kasir extends CI_Model
{
    public $table = 'tb_kasir';
    public $id = 'tb_kasir.id_kasir';
    public $status ='tb_kasir.status';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('*');
        $this->db->from('tb_menu');
        $this->db->join('tb_kasir','tb_kasir.id_menu = tb_menu.id_menu','tb_kasir.id_user = tb_user.id_user');
        $query = $this->db->get();
        return $query->result_array();
        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);;
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getByStatus($status)
    {
        $this->db->from($this->table);;
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete_all($status)
    {
        $this->db->from($this->table);
        $this->db->where('status', $status);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
