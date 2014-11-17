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

		 $message = "";
         $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
         $this -> form_validation -> set_rules ( array(

            array(
              'field' => 'track_title',
              'label' => 'Track Title',
              'rules' => 'required|xss_clean',
              ),

            array(
              'field' => 'one_line_intro',
              'label' => 'One Line Intro',
              'rules' => 'required|xss_clean',
              ),

            array(
                'field' => 'level',
                'label' => 'Difficulty Level',
                'rules' => 'required',
                ),

            array(
                'field' => 'track_description',
                'label' => 'Track Description',
                'rules' => 'required|xss_clean',
                ),

            array(
                'field' => 'additional_file_title',
                'label' => 'Additional File',
                'rules' => 'required|xss_clean',
                ),

		

            ));

         if($this->form_validation->run())
         {
                $newTrack = new track();
                $newTrack -> track_title  = $this -> input -> post('track_title');
                $newTrack -> tiny_intro  = $this -> input -> post('one_line_intro');
                $newTrack -> track_description  = $this -> input -> post('track_description');
                $newTrack -> difficulty_level  = $this -> input -> post('level');
                $newTrack -> status  = ($this -> input -> post('status') == 'on' ) ? 'yes' : 'no';

                $newTrack -> is_new  = $this -> input -> post('');
                $newTrack -> additional_file_title  = $this -> input -> post('additional_file_title');
                $newTrack -> additional_file_path  = NULL;
 				
 				/*
                print_r($newTrack);
                 die();

                */

                $newTrack -> save();
                $message = "<h5>Track {$newTrack->track_title} registered successfully!";
         }

		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('templates/side-navs');
		$this->load->view('pages/track-add', array('message' => $message));
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