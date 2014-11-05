<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recommendations extends MY_Controller 
{
		public function view()
	{

		redirect("home/index");
		

	}


	public function index()
	{

		$this->load->view('templates/header');
		// $this->load->view('templates/side-navs');
		$this->load->view('pages/recommendations');
		$this->load->view('templates/footer');

	}



}/*class Recommendations extends CI_Controller */
/*end of file: recommendations.php*/