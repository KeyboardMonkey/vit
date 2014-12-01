<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upcoming extends MY_Controller 
{



	public function index()
	{
           
		$this->load->view('templates/header');
//		$this->load->view('templates/breadcrumbs');
	 	$this->load->view('templates/side-navs');
		$this->load->view('pages/upcoming-courses');
		$this->load->view('templates/footer');

	}



}/*class Upcoming extends MY_Controller */
/*end of file: upcoming.php*/