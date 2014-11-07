<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends CI_Controller 
{

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('pages/quiz');
		$this->load->view('templates/footer');

	}



}/*class Quiz extends CI_Controller */
/*end of file: quiz.php*/