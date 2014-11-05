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
        
        
        $this -> load -> view('pages/course-intro', array('course' => $course));
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
              'field' => 'full_name',
              'label' => 'Course Full Name',
              'rules' => 'required|xss_clean',
              ),
            array(
              'field' => 'short_name',
              'label' => 'Course Short Name',
              'rules' => 'required|xss_clean',
              ),

            array(
                'field' => 'category',
                'label' => 'Course Category',
                'rules' => 'required|number|in[course_category.id]'
                ),

            array(
                'field' => 'description',
                'label' => 'Course Description',
                'rules' => 'required|xss_clean|min_length[10]'
                )


            ));

         if($this->form_validation->run())
         {
                $newCourse = new course();
                $newCourse ->full_name  = $this -> input -> post('full_name');
                $newCourse ->short_name  = $this -> input -> post('short_name');
                $newCourse ->description  = $this -> input -> post('description');
                $newCourse ->category  = $this -> input -> post('category');
                $newCourse ->status  = ($this -> input -> post('status') == 'on' ) ? 'yes' : 'no';
                $newCourse -> save();
                $message = "<h5>Course {$newCourse->short_name} registered successfully!";
         }


        $this->load->view('templates/header');
        $this->load->view('templates/breadcrumbs');
        // $this->load->view('pages/course_add', array('message' => $message));
        $this->load->view('pages/course-add', array('message' => $message));
        $this->load->view('templates/footer');
    }



    public function edit()
    {

    	

    }

    public function delete()
    {

    	

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