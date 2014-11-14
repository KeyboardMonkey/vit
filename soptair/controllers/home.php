<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller 
{
		public function view()
	{

		redirect("home/index");
		

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
	 	$this->load->view('templates/side-navs');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');

	}



}/*class Home extends MY_Controller */
/*end of file: home.php*/