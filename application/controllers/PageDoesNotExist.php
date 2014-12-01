<?php
class PageDoesNotExist extends CI_Controller
{
    public function __construct()
    {
            parent::__construct();
    }

    public function index()
    {

        $this->output->set_status_header('404');
        $this->load->view('templates/header-clean'); 
        $this->load->view('pages/four-O-four');
        $this->load->view('templates/footer');
        
    }
}