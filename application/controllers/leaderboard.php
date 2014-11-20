<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leaderboard extends MY_Controller 
{



	public function index($course_cat=NULL)
	{
            $leaders = $this -> user -> getLeaders($course_cat, 15);
           
		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
	 	$this->load->view('templates/side-navs');
	 	$this->load->view('widgets/top-three-students', array('leaders' => $leaders, 'category' => $course_cat));
		$this->load->view('pages/leaderboard', array('leaders' => $leaders, 'category' => $course_cat));
		$this->load->view('templates/footer');

	}



}/*class Leaderboard extends MY_Controller */
/*end of file: leaderboard.php*/