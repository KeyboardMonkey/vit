<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tech_feeds extends CI_Controller 
{
		public function view()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
	 	
		$this->load->view('pages/tech-feeds');
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
	 	;
		$this->load->view('pages/tech-feeds');
		$this->load->view('templates/footer');

	}



}/*class Tech_feeds extends CI_Controller */
/*end of file: tech_feeds.php*/