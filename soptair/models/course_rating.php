<?php

    class course_rating extends MY_Model{
        public function __construct() {
            parent::__construct();
        }
        const DB_TABLE = 'course_rating';
        const DB_TABLE_PK = 'rating_id';
        public $rating_id;
        public $course_id;
        public $user_id;
        public $rating;
        
        public function hasUserRatedCourse($course_id, $user_id)
        {
            $courses = $this ->getWithCondition(array('course_id' => $course_id, 'user_id' => $user_id));
            if(count($courses) > 0)
            {
                return TRUE;
            }
            else return FALSE;
        }
        
    }