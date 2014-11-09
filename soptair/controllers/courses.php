<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller 
{

    public function view($id)
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

    public function add()
    {

        /* if($this -> session -> userdata('type') != "Teacher" && $this -> session -> userdata('type') != 'Admin')
         {
             redirect('library');
         }*/

         $message = "";
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
                'rules' => 'required|number|in[course_category.id]'
                ),

            array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required|xss_clean|min_length[10]'
                ),

            array(
                'field' => 'level',
                'label' => 'Difficulty Level',
                'rules' => 'required|xss_clean|min_length[10]'
                ),
            array(
                'field' => 'sectiontitle',
                'label' => 'Section Name',
                'rules' => 'xss_clean|min_length[10]'
                ),
            array(
                'field' => 'videotitle',
                'label' => 'Video Title',
                'rules' => 'xss_clean|min_length[10]'
                ),
            array(
                'field' => 'additionalfiletitle',
                'label' => 'Addt. File Title',
                'rules' => 'xss_clean|min_length[10]'
                )


            ));

         if($this->form_validation->run())
         {
                $newCourse = new course();
                $newCourse ->full_name  = $this -> input -> post('coursefullname');
                $newCourse ->tiny_intro  = $this -> input -> post('courseshortname');
                $newCourse ->description  = $this -> input -> post('description');
                $newCourse ->difficulty_level  = $this -> input -> post('level');

                $newCourse ->section_title  = $this -> input -> post('sectiontitle');
                $newCourse ->video_title  = $this -> input -> post('videotitle');
                $newCourse ->video_file  = $this -> input -> post('videofile');
                $newCourse ->srt  = $this -> input -> post('srt');
                $newCourse ->full_course_files_zip  = $this -> input -> post('fullcoursefileszip');
                $newCourse ->additional_file_title  = $this -> input -> post('additionalfiletitle');
                $newCourse ->additional_file  = $this -> input -> post('additionalfile');

                $newCourse ->category  = $this -> input -> post('category');
                $newCourse ->status  = ($this -> input -> post('status') == 'on' ) ? 'yes' : 'no';
                $newCourse -> save();
                $message = "<h5>Course {$newCourse->full_name} registered successfully!";
         }


        $this->load->view('templates/header');
        $this->load->view('templates/breadcrumbs');
        // $this->load->view('pages/course_add', array('message' => $message));
        $this->load->view('pages/course-add', array('message' => $message));
        $this->load->view('templates/footer');
    }



    public function course_playback()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/breadcrumbs');
        $this->load->view('pages/course-playback');
        $this->load->view('templates/footer');
    }

    public function index()

    {

        redirect("library");

    }


} /*class Courses extends CI_Controller */
/*end of file: courses.php*/