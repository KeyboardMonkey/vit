<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paths extends CI_Controller 
{
		public function view()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('pages/paths');
		$this->load->view('templates/footer');
		

	}



		public function edit()
	{

	

	}

		public function delete()
	{

	

	}



	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('pages/paths');
		$this->load->view('templates/footer');

	}



}/*class Paths extends CI_Controller */
/*end of file: pathss.php*/