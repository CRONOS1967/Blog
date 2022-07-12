<?php
class Comments extends CI_Controller
{
    public function create($id)
    {
        $id = $this->input->post('id');
        $data['post'] = $this->post_model->get_posts($id);
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('posts/view', $data);
        } else {
      
            $this->comment_model->create($id);
            redirect('posts/'. $id);
        }
    }
}
