<?php

    class course_enrollment extends MY_Model
    {
        public function __construct() 
        {
            parent::__construct();
        }
        const DB_TABLE = 'course_enrollment';
        const DB_TABLE_PK = 'enrol_id';
        public $enrol_id;
        public $course_id;
        public $user_id;
        public $enrol_time;
        public $status = 'in-progress';
        public $progress = 0;

   /*     public function getEnrolmentDate ($user_id, $course_id)
        {
            $enrollement = getWithConditionLimit1(array('user_id' => $user_id, 'course_id' => $course_id));
            return $enrollement -> enrol_time;
        }*/

        public function getMyEnrolledCourses($user_id=NULL){
            if($user_id==NULL)
                 $user_id=$this -> session -> userdata('user_id');
             $allEnrollments = $this -> course_enrollment -> getWithCondition(array('user_id' => $user_id));
             return count($allEnrollments);
        }

    }

?>