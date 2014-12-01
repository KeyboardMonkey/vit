<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coming_soon extends MY_Controller 
{


	public function index()
	{

		$this->load->view('templates/header');
		//$this->load->view('templates/breadcrumbs');
	 	//$this->load->view('templates/side-navs');	
		$this->load->view('pages/coming-soon');
		$this->load->view('templates/footer');

	}



}/*class Coming_soon extends MY_Controller */
/*end of file: coming_soon.php*/