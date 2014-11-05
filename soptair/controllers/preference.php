<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preference extends MY_Controller 
{
		public function rank_preference()
	{

		$this->load->view('templates/header');
		$this->load->view('wizards/pref-rank');
		$this->load->view('templates/footer');
		

	}


	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('wizards/pref-set');
		$this->load->view('templates/footer');

	}



}/*class Preference extends CI_Controller */
/*end of file: preference.php*/