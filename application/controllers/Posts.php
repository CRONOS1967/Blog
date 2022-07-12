<?php
class Posts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('security');
    }
    public function index()
    {
        $data['title'] = ucfirst('latest Posts');

        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('posts/index', $data);
    }

    public function view($id = null)
    {
        $data['post'] = $this->post_model->get_posts($id);
        $data['comments']= $this->comment_model->get_comments($id);
        (empty($data['post'])) ? show_404() : '';
        $data['title'] = ucfirst($data['post']['title']);

        $this->load->view('posts/view', $data);
    }

    public function create()
    {
        $data['title'] = ucfirst('create Posts');
        $data['categories'] = $this->post_model->get_categories();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Content', 'required');
        $this->form_validation->set_rules('catagory_id', 'Category', 'required');
        if ($this->form_validation->run() === false) {

            $this->load->view('posts/create', $data);
        } else {
            $data = $this->security->xss_clean($data);
            $this->post_model->create_post();
            redirect('posts');
        }
    }

    public function delete($id)
    {
        $this->post_model->delete_post($id);
        redirect('posts');
    }
    public function edit($id = null)
    {
        $data['post'] = $this->post_model->get_posts($id);
        $data['categories'] = $this->post_model->get_categories();
        (empty($data['post'])) ? show_404() : '';
        $data['title'] = ucfirst($data['post']['title']);

        $this->load->view('posts/edit', $data);
    }
    public function update()
    {
        $this->post_model->update_post();
        redirect('posts');
    }

    // public function new()
    // {
    //     \new code
    // }



    // public function remove($id = null)
    // {
    //     \remove code
    // }

}
