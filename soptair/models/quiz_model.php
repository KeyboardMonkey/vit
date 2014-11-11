<?php
class quiz_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    const DB_TABLE = 'quiz';
    const DB_TABLE_PK = 'quiz_id';
    public $quiz_id;
    public $course_id;  //foreign key
    public $quiz_title;
    public $quiz_progress_points = 20;
    public $created_date;
    public $updated_date;
}
?>