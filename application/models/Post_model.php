 <?php
    class Post_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_posts($id = false)
        {
            if ($id === false) {
                $this->db->order_by('posts.id', 'DESC');
                $this->db->join('categories','categories.id = posts.category_id');
                $query = $this->db->get('posts');
                return $query->result_array();
            }
            $query = $this->db->get_where('posts', ['id' => $id]);
            return $query->row_array();
        }
        public function view($id = null)
        {
            $data['post'] = $this->post_model->get_posts($id);
            if (empty($data['posts'])) {
                show_404();
            }
        }
        public function create_post()
        {
            $categories['tar'] = $this->input->post('catagory_id');
            $data = [
                "title" => $this->input->post('title'),
                "body" => $this->input->post('body'),
                "category_id"=> $categories['tar'],
                "created_at" => date('Y-m-d H:i:s')
            ];
            return $this->db->insert('posts', $data);
        }
        public function delete_post($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('posts');
            return true;
        }
        public function update_post()
        {
            $data = [
                "title" => $this->input->post('title'),
                "body" => $this->input->post('body'),
                "category_id"=>$this->input->post('catagory_id')
            ];
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('posts', $data);
        }
        public function get_categories()
        {
            $this->db->order_by('category');
            $query = $this->db->get('categories');
            return $query->result_array();
        }
        public function get_postBy_category($id)
        {  $this->db->order_by('posts.id', 'DESC');
            $this->db->join('categories','categories.id = posts.category_id');
            $query = $this->db->get_where('posts',["category_id"=>$id]);

            return $query->result_array();

        }
    }
