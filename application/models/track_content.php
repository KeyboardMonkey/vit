<?php
class track_content extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    const DB_TABLE = 'track_content';
    const DB_TABLE_PK = 'id';
    public $id;
    public $track_id;  
    public $course_id;
    public $created_date;
    public $updated_date;
    public $created_by = 1;
    public $course_index;
}
?>