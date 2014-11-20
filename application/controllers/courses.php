<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends MY_Controller 
{

    public function view($id=NULL)
    {



    if($id==NULL)
    {
      redirect("library");
    }


        $course = new course();
        $course -> load($id);
       
        $course_enrollment = new course_enrollment();
        $course_enrollment -> load($id);
        
        if(!isset($course->course_id))
        {
           redirect('library');
        }
        
        
        $this -> load -> view('templates/header');
        $this -> load -> view('templates/breadcrumbs'); 
        $this -> load -> view('pages/course-intro', array('course' => $course));
        $this -> load -> view('widgets/similar-courses-widget');
        $this -> load -> view('templates/footer');
    }  

     public function edit($id)
    {
        $course = new course();
        $course -> load($id);
        if(!isset($course->course_id))
        {
           redirect('library');
        }
        
        $this -> load -> view('templates/header');
        $this -> load -> view('templates/breadcrumbs'); 
        $this -> load -> view('pages/course-intro', array('course' => $course));
        $this -> load -> view('templates/footer');
    }

   public function enrollme($course_id)
    {
        $course_enrollment = new course_enrollment();
        $course_enrollment -> user_id = $this -> session -> userdata('user_id');
        $course_enrollment -> course_id = $course_id;
        $course_enrollment -> save();
        redirect('courses/view/'.$course_id);
    }

    public function ratecourse($course_id, $rating)
    {
        $course = new course();
        $course -> load($course_id);
        if(isset($course->course_id))
        {
            $course_rating = new course_rating();
            $course_rating -> rating = $rating;
            $course_rating -> course_id = $course_id;
            $course_rating -> user_id = $this -> session -> userdata('user_id');
            $course_rating -> save();
        }
        redirect('courses/view/'. $course_id);
    }
    public function add_new_course()
    {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this -> form_validation -> set_rules ( array(

            array(
                'field' => 'coursefullname',
                'label' => 'Course Name',
                'rules' => 'required|xss_clean',
            ),

            array(
                'field' => 'courseshortname',
                'label' => 'One Line Intro',
                'rules' => 'required|xss_clean',
            ),

            array(
                'field' => 'category',
                'label' => 'Category',
                'rules' => 'required|number|in[course_category.id]',
            ),

            array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required|xss_clean|min_length[10]',
            ),

            array(
                'field' => 'level',
                'label' => 'Difficulty Level',
                'rules' => 'required|xss_clean',
            ),




            array(
                'field' => 'status',
                'label' => 'Visibility',
                'rules' => 'required',
            )


        ));
        if($this->form_validation->run())
        {
            $newCourse = new course();
            $newCourse -> full_name  = $this -> input -> post('coursefullname');
            $newCourse -> tiny_intro  = $this -> input -> post('courseshortname');
            $newCourse -> description  = $this -> input -> post('description');
            $newCourse -> difficulty_level  = $this -> input -> post('level');

            $newCourse -> section_title  = "n/a"; //$this -> input -> post('sectiontitle');
            $newCourse -> video_title  = $this -> input -> post('videotitle');
            $newCourse -> video_file  = $this -> input -> post('videofile');
            $newCourse -> srt  = $this -> input -> post('srt');
            $newCourse -> full_course_files_zip  = $this -> input -> post('fullcoursefileszip');
            $newCourse -> additional_file_title  = $this -> input -> post('additionalfiletitle');
            $newCourse -> additional_file  = $this -> input -> post('additionalfile');

            $newCourse -> category  = $this -> input -> post('category');
            $newCourse -> status  = ($this -> input -> post('status') == 'on' ) ? 'yes' : 'no';

            /* print_r($newCourse);
             die();
*/
            $newCourse -> save();
            echo json_encode(array('status' => 'ok', 'id' => $newCourse -> course_id));
        }
        else{
            echo json_encode(array('status' => 'error', 'msg' => json_encode(validation_errors())));
        }

    }
    public function add()
    {


        $message = "";
        $this->load->view('templates/header');
        $this->load->view('templates/breadcrumbs');
        // $this->load->view('pages/course_add', array('message' => $message));
        $this->load->view('pages/course-add', array('message' => $message));
        $this->load->view('templates/footer');
    }



    public function course_playback($course_id = NULL, $start_lecture=-1)
    {
        if($course_id == NULL) 
        {
          redirect('library');
        }
        
        $course = new course();
        $course->load($course_id);
        if(!isset($course->course_id)) redirect('home');
        if(!$course -> isUserEnrolled($this -> session -> userdata('user_id')))
	{
            redirect('courses/view/' . $course_id);
        }
        echo "START:" . $start_lecture;
        if($start_lecture==-1)
        {
          $start_lecture = $course -> getNextLecture();
          $rUrl = 'courses/course_playback/'.$course_id.'/'.$start_lecture;
         
          redirect($rUrl);
        }

        $lect_files = $this -> file_model -> getWithCondition(array('course_id' => $course_id));
        $lectures = $this -> lecture -> getWithCondition(array('course_id' => $course_id));
   

        


        $this->load->view('templates/header');
        $this->load->view('templates/breadcrumbs');
        $this->load->view('pages/course-playback', array('course_id' => $course_id, 'course' => $course, 'lect_files' => $lect_files, 'lectures' => $lectures, 'current_lecture' => $start_lecture));
        $this->load->view('templates/footer');
    }

    public function index()
    {
        redirect("library");
    }
    public function get_next_lecture($course_id=1)
    {
        $course = new course();
        $course -> load($course_id);
        print_r($course ->getNextLecture());
    }
    public function set_lecture_progress($lecture_id, $progress)
    {
      $user_lecture_progress = new user_lecture_progress();
      $user_lecture_progress = $this -> user_lecture_progress -> 
      getWithConditionLimit1(
                                  array('user_id' => $this -> session -> userdata('user_id')
                                          ,'lecture_id' => $lecture_id
                                  )
                            );
      if(!isset($user_lecture_progress -> progress )) $user_lecture_progress -> progress =0;
      $user_lecture_progress -> progress = ($progress > $user_lecture_progress -> progress ) ? $progress : $user_lecture_progress -> progress;
      $user_lecture_progress -> lecture_id = $lecture_id;
      $user_lecture_progress -> user_id = $this -> session -> userdata('user_id');
      $user_lecture_progress -> save(); 
      echo "OK";


    }
    public function submit_review($course_id=NULL)
    {
       if($course_id==NULL) redirect('library');
        $course = new course();
        $course -> load($course_id);
        if(!isset($course->course_id)) redirect('library');
        if(!$course -> isUserEnrolled($this -> session -> userdata('user_id')))
                                     redirect('library');
       if($course -> reviewedByUser())
                                       redirect('library');
      // echo $course -> getLectureProgress();
      // die();   
        if( $course -> getLectureProgress() != 100)
                                        redirect('library');
        //if(strlen($this -> input -> post('review')) < 250) redirect('courses/view/' . $course_id);
        $review = new course_review();  
        $review = $review ->getWithConditionLimit1(array('user_id' => $this -> session -> userdata('user_id'),
                'course_id' => $course_id 
            ));
        $review -> user_id = $this -> session -> userdata('user_id');
        $review -> review = $this -> input -> post('review');
        $review -> course_id = $course_id;
        $review -> save();
        print_r($review);
        
        redirect('courses/view/' . $course_id);
        
    }
    

} /*class Courses extends MY_Controller */
/*end of file: courses.php*/