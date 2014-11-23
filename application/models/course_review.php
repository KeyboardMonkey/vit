<?php

class course_review extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    const DB_TABLE = 'course_review';
    const DB_TABLE_PK = 'id';
    public $id;
    public $user_id;
    public $course_id;
    public $review;
    public $submittion_date;
    public $marked_by_teacher;
    public $marks;

    public function getPendingReviewsCourses()
    {
        $courses = array();
        $reviews = $this-> course_review -> getWithCondition(array('marked_by_teacher' => 0));
        foreach ($reviews as $review) {
            $course = new course();
            $course -> load($review -> course_id);
            $courses[$course->course_id] =$course;
        }
    return $courses;
    }
    public function getUnmarkedReviews($_course_id = NULL, $_user_id = NULL)
    {
        if($_user_id == NULL) $_user_id = $this -> session -> userdata('user_id');
        if($_course_id == NULL) $_course_id = $this -> course_id;
        $reviews = $this-> course_review -> getWithCondition(array('marked_by_teacher' => 0, 'course_id' => $_course_id));
        return $reviews;
    }
    public function reviewSubmittedByUser( $_course_id = NULL,$_user_id = NULL)
    {
        if($_user_id == NULL) $_user_id = $this -> session -> userdata('user_id');
        if($_course_id == NULL) $_course_id = $this -> course_id;
        $reviews = $this-> course_review -> getWithCondition(array('user_id' => $_user_id, 'course_id' => $_course_id));
      //  print_r($reviews);
       // echo ">" . count($reviews);
       // die();
        return ( count($reviews) > 0);
    }
}
?>
