<?php
class Category_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function index()
    {
        $this->db->order_by('category');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    public function create()
    {
        $data = [
            "category" => $this->db->escape($this->input->post('name'))
        ];
        return $this->db->insert('categories', $data);
    }
    public function get_category($id)
    {
        $query = $this->db->get_where('categories', ["id" => $id]);
        return $query->row();
    }
}
