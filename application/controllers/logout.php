<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Controller {

	

	public function index()
	{

	$this->session->sess_destroy();
	$this->load->view('templates/header-clean');
	$this->load->view('pages/logout');
	$this->load->view('templates/footer');

	}

}/*class Logout extends MY_Controller */
/*end of file: logout.php*/