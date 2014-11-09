<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tracks extends CI_Controller 
{
		public function view()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');

		$this->load->view('pages/tracks');
		$this->load->view('templates/footer');
		

	}



		public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('templates/side-navs');
		$this->load->view('pages/track-add');
		$this->load->view('templates/footer');

	

	}

		public function delete()
	{

	

	}



	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('pages/tracks');
		$this->load->view('templates/footer');

	}



}/*class Tracks extends CI_Controller */
/*end of file: tracks.php*/