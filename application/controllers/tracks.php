<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tracks extends MY_Controller 
{

		public function explore($track_id=NULL)
                {
                    if($track_id==NULL)
                        redirect('tracks');
                    $track =new track();
                    $track -> load($track_id);
                    if(!isset($track -> track_id))redirect('tracks');
                    if($track ->isUserEnrolled())
                    {
                        redirect('tracks/view/' . $track_id);
                    }
                    $this->load->view('templates/header');
                    $this->load->view('templates/breadcrumbs');
                    $this->load->view('pages/track-explore', array('track_id' => $track_id));
                    $this->load->view('templates/footer');

                }


        public function view($track_id=NULL)
                {
                    if($track_id==NULL)
                        redirect('tracks');
                    $track =new track();
                    $track -> load($track_id);
                    if(!isset($track -> track_id))redirect('tracks');
                     
                    if(!$track ->isUserEnrolled())
                    {
                        redirect('tracks/explore/' . $track_id);
                    }
                    $this->load->view('templates/header');
                    $this->load->view('templates/breadcrumbs');
                    $this->load->view('pages/track-in-progress', array('track_id' => $track_id));
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
        public function enroll($track_id = NULL)
        {
                    if($track_id==NULL)
                    redirect('tracks');
                    $track =new track();
                    $track -> load($track_id);
                    if(!isset($track -> track_id))redirect('tracks');
                    if($track ->isUserEnrolled())
                    {
                        redirect('tracks/view/' . $track_id);
                    }
                    else
                    {
                        $myId = $this -> session -> userdata('user_id');
                        $enrollment = new tracks_enrollment();
                        $enrollment -> user_id = $this -> session -> userdata('user_id');
                        $enrollment -> track_id = $track_id;
                        $enrollment -> save();
                        $courses = $track ->getCourses();
                        foreach($courses as $course)
                        {
                            $course_enrollment = new course_enrollment();
                            $course_enrollment = $course_enrollment ->getWithConditionLimit1(array('course_id' => $course -> course_id, 'user_id' => $myId));
                            $course_enrollment -> course_id = $course -> course_id;
                            $course_enrollment -> user_id = $this -> session -> userdata('user_id');
                            $course_enrollment -> save();
                        }
                        redirect('tracks/view/' . $track_id);
                    }
                    
        }
        public function resume($track_id = NULL)
        {
                    if($track_id==NULL)
                    redirect('tracks');
                    $track =new track();
                    $track -> load($track_id);
                    if(!isset($track -> track_id))redirect('tracks');
                    if(!$track ->isUserEnrolled())
                    {
                        echo "User not enrolled";
                        die();
                        redirect('tracks/view/' . $track_id);
                    }
                    else
                    {
                        $myId = $this -> session -> userdata('user_id');
                       //print_r($track);
                        $courses = $track ->getCourses();
                        //print_r($courses);
                        if(count($courses) == 0) 
                        {
                            echo "No course in track";
                            die();
                        }
                        $next_course =new  course();
                        foreach($courses as $course)
                        {
                            if($course -> getLectureProgress() < 100)
                            {
                                echo "<br /> <br />";
                                echo $course -> getLectureProgress() . "<br />";
                                print_r($course);
                                echo "<br /> <br /> PROGRESS LESS THAN 100";
                               
                                $next_course = $course;
                                break;
                            }
                            else{
                                echo "<br /> <br />";
                               // print_r($course);
                                echo "<br /> <br /> PROGRESS  100";
                            }
                        }
                        redirect('/courses/course_playback/' . $next_course->course_id);
                        
                    }
                    
        }

}/*class Tracks extends MY_Controller */
/*end of file: tracks.php*/