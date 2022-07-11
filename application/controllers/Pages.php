<?php
class Pages extends CI_Controller
{
    public function views($page = 'home')
    {
        if (!file_exists(APPPATH. '/views/pages/' . $page . '.php')) {
            show_404();
        }
        $data['title'] = ucfirst($page);
        
        $this->load->view('pages/' . $page, $data);
  
    }
}
// application/views/pages/about.php