<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifications extends MY_Controller 
{
		public function view()
	{

		redirect("notifications/index");
		
		

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
		$this->load->view('pages/notifications');
		$this->load->view('templates/footer');

	}



}/*class Notifications extends MY_Controller */
/*end of file: notifications.php*/