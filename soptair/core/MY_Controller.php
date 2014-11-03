<?php 

class MY_Controller extends CI_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('session');

        if (!$this->session->userdata('logged_in'))
        {

            redirect('register');

        }

    }

}





?>