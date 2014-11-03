<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller 
{
		public function view()
	{

		$this->load->view('templates/header-login');
		$this->load->view('pages/register');
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

		$this->load->view('templates/header-login');
		$this->load->view('pages/register');
		$this->load->view('templates/footer');

	}



}