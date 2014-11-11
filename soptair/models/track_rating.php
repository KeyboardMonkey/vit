<?php

class track_rating extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'track_rating';
  const DB_TABLE_PK = 'rating_id';
  
    public $rating_id;

//      foreign key, don't know if it should be included here or not, so added but commented
//    public $course_id;


//      foreign key, don't know if it should be included here or not, so added but commented
//    public $user_id;



    public $rating;

}