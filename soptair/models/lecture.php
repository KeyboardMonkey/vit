<?php

class lecture extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'lectures';
  const DB_TABLE_PK = 'lect_id';
  
    public $lect_id;
    public $course_id;
    public $vid_title;
    public $vid_path;
    public $srt_path;
    public $progress;
    public $lect_progress_points;
    public $additional_file_title;
    public $additional_file_path;
    public $created_date;
    public $updated_date;
    public $is_completed;
    
    public function getProgress()
    {
      $prog = new user_lecture_progress();
      $prog = $prog -> getWithConditionLimit1(array('lecture_id' => $this -> lect_id,
        'user_id' => $this -> session -> userdata('user_id')));
    //  print_r($prog);die();  
      if(isset($prog -> progress_id))
      return $prog -> progress;

      else return 0;
    }
    public function getProgressObject()
    {
      $prog = new user_lecture_progress();
      $prog = $prog -> getWithConditionLimit1(array('lecture_id' => $this -> lect_id,
        'user_id' => $this -> session -> userdata('user_id')));
      
      if(isset($prog -> progress_id))
      return $prog -> progress;
      else return 0;
    }
}