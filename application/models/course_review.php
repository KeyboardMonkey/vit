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
    
    public function reviewSubmittedByUser( $_course_id = NULL,$_user_id = NULL)
    {
        if($_user_id == NULL) $_user_id = $this -> session -> userdata('user_id');
        if($_course_id == NULL) $_course_id = $this -> $course_id;
        return ( count($this-> course_review -> getWithCondition(array('user_id' => $_user_id, 'course_id' => $_course_id))) > 0);
    }
}
?>
