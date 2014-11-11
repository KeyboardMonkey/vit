<?php

class lecture extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'lectures';
  const DB_TABLE_PK = 'lect_id';
  
    public $lect_id;
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
 
}