<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leaderboard extends MY_Controller 
{
	
		public function view()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
	 	$this->load->view('templates/side-navs');
		$this->load->view('pages/leaderboard');
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
	 	$this->load->view('templates/side-navs');
	 	$this->load->view('widgets/top-three-students');
		$this->load->view('pages/leaderboard');
		$this->load->view('templates/footer');

	}



}/*class Leaderboard extends MY_Controller */
/*end of file: leaderboard.php*/