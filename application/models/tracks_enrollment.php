<?php
class tracks_enrollment extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    const DB_TABLE = 'tracks_enrollment';
    const DB_TABLE_PK = 'track_enrol_id';
    public $track_enrol_id;
    public $course_id;
    public $user_id;
    public $track_enrol_time;
    public $status= 'in-progress';
    public $progress;
}
?>
