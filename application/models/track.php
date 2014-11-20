<?php

class track extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'tracks';
  const DB_TABLE_PK = 'track_id';
  
    public $track_id;
    public $track_title;
    public $tiny_intro;
    public $track_description;
    public $status;
    public $track_points = 100;
    public $track_progress = 0;
    public $difficulty_level;
    public $is_new;
    public $additional_file_title;
    public $additional_file_path;
    public $created_date;
    public $updated_date;
    public $created_by = 1;

    public function getOverAllRating()
    {
        $ratings  = $this -> track_rating -> getWithCondition(array('track_id' => $this -> track_id));
        $score = 0;
        foreach($ratings as $rating)
        {
            $score += $rating -> rating;
        }
        $count = (count($ratings));
        if($count == 0) $count = 1;
        return (int) ($score / $count);
    }

      public function numberOfRatings()
    {
        $ratings  = $this -> track_rating -> getWithCondition(array('track_id' => $this -> track_id));
        return count($ratings);
    }
    public function getCourses()
    {
        $track_contents = $this -> track_content -> getWithConditionAndOrder(array('track_id' => $this -> track_id), 'course_index asc');
        $courses = array();
        foreach($track_contents as $content)
        {
            $course = new course();
            $course -> load($content -> course_id);
            array_push($courses, $course);
        }
        return $courses;
    }
  public function getProgress()
  {
        $track_contents = $this -> track_content -> getWithConditionAndOrder(array('track_id' => $this -> track_id), 'course_index asc');
        $courses = array();
        $progress = 0;
        $count = 0;
        foreach($track_contents as $content)
        {
            $course = new course();
            $course -> load($content -> course_id);
            $progress += $course ->getCourseProgressPercent();
            $count ++;
        }
        if($count == 0) $count =1;
        return $progress / $count;
  }
 public function isUserEnrolled($user_id=NULL)
    {
        if($user_id==NULL)
         $user_id=$this -> session -> userdata('user_id');
        $enrollment = $this -> tracks_enrollment -> getWithCondition(array('user_id' => $user_id, 'track_id' => $this -> track_id));
       //print_r($enrollment);
       //die();
        if(count($enrollment) > 0 ){
           // echo "ENROLLED";
            return TRUE;
        }
        else{
            //echo "NOT ENROLLED";
            return FALSE;
        }
        
    }
}