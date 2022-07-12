<?php
class Comment_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('security');
    }
    public function create($id)
    {
        $data = [
            "post_id" => $id,
            "name" => $this->db->escape($this->input->post('name')),
            "email" => $this->db->escape($this->input->post('email')),
            "body" => $this->db->escape($this->input->post('comment'))
        ];
        $data = $this->security->xss_clean($data);
        return $this->db->insert('comments', $data);
    }
    public function get_comments($id)
    {
        $query = $this->db->get_where('comments',["post_id"=>$id]);
        return $query->result_array();
    }
}
