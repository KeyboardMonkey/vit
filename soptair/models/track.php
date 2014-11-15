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
 
}