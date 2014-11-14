<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tracks extends MY_Controller 
{
		public function explore()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('pages/explore-track');
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

		public function resume_track()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('pages/track-in-progress');
		$this->load->view('templates/footer');

	}
		public function suggest_track()
	{

		$this->load->view('templates/header');
		$this->load->view('wizards/new-track-wizard');
		$this->load->view('templates/footer');

	}



	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('pages/tracks');
		$this->load->view('templates/footer');

	}



}/*class Tracks extends MY_Controller */
/*end of file: tracks.php*/