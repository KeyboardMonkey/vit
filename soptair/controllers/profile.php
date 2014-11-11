<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller 
{
		public function view()
	{

		// redirect to individual user profile here perhaps 
		

	}



		public function edit()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
	 	$this->load->view('templates/side-navs');
		$this->load->view('pages/edit-profile');
		$this->load->view('templates/footer');

	

	}

		public function delete()
	{

	

	}



	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('templates/side-navs');
		$this->load->view('pages/profile');
		$this->load->view('templates/footer');

	}

}/*class Profile extends CI_Controller */
/*end of file: profile.php*/