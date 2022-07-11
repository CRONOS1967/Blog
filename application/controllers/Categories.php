<?php
class Categories extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('security');
    }
    public function index()
    {
        $data['title'] = ucfirst('Categories');

        $data['categories'] = $this->category_model->index();

        $this->load->view('categories/index', $data);
    }
    public function create()
    {
        $data['title'] = 'Create Category';
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() === false) {
            $this->load->view('categories/create');
        } else {
            $data = $this->security->xss_clean($data);
            $this->category_model->create();
            redirect('categories');
        }
    }
    public function post($id)
    {
        $data['title'] = $this->category_model->get_category($id)->category;

        $data['posts'] = $this->post_model->get_postBy_category($id);
        $this->load->view('posts/index', $data);
    }
}
