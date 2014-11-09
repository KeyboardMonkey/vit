<?php

class course extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'courses';
  const DB_TABLE_PK = 'course_id';
  
    public $course_id;
    public $full_name;
    public $tiny_intro;
    public $category;
    public $difficulty_level;
    public $status;
    public $description;
    public $points = 100;
    public $developed_by;
    public $learning_outcome;
    public $target_audience;
    public $is_new;
    public $created_date;
    public $updated_date;




    public function getCategoryTitle(){
        $_category = new course_cat();
        $_category->load($this->category);
        return $_category -> category;
    }
    public function getCategory(){
        $_cat = new course_cat();
        $_cat -> load($this->category);
        return $_cat;
    }
    public function courseRatedByMe(){
        
    }
    public function isRatedByUser($user_id = NULL){
        if($user_id != NULL)
        return $this -> course_rating -> hasUserRatedCourse($this -> course_id, $user_id);
        else
        return $this -> course_rating -> hasUserRatedCourse($this -> course_id, $this -> session -> userdata('user_id'));
    }
    public function getRatingByUser($user_id = NULL){
          if($user_id != NULL)
        $rating = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id, 'user_id' => $user_id));
        else 
            $rating = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id, 'user_id' => $this -> session -> userdata('user_id')));
        echo "<hr />";
          if(count($rating > 0)){
              foreach ($rating as $_rating) return $_rating -> rating;
          }
          return $rating -> rating;
        //return $this -> course_rating -> hasUserRatedCourse($course_id, $user_id) -> rating;
    }
    public function numberOfRatings()
    {
        $ratings  = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id));
        return count($ratings);
    }
    public function getOverAllRating(){
        $ratings  = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id));
        $score = 0;
        foreach($ratings as $rating){
            $score += $rating -> rating;
        }
        $count = (count($ratings));
        if($count == 0) $count = 1;
        return (int) ($score / $count);
    }
    public function isUserEnrolled($user_id){
        $enrollment = $this -> course_enrollment -> getWithCondition(array('user_id' => $user_id, 'course_id' => $this -> course_id));
        if(count($enrollment) > 0 ) return TRUE;
        else return FALSE;
        
    }
}