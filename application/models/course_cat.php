<?php
class course_cat extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    const DB_TABLE = 'course_category';
    const DB_TABLE_PK = 'id';
    public $id;
    public $category;
    public $color_tag;
    
    
    public function getCourses()
    {
        $courses = $this -> course -> getWithCondition(array('category' => $this -> id));
        return $courses;
    }
    public function getPointsEarnedInCategory($user_id = NULL)
    {
        if($user_id == NULL)
        $user_id = $this -> session -> userdata('user_id');
        $courses = $this ->getCourses();
        $points = 0;
        foreach($courses as $course)
        {
            if($course -> isUserEnrolled($user_id))
            {
                $points += $course -> getEarnedPoints();
            }
        }
        return $points;
    }
    
    public function getLeaders($limit = 5)
    {
        
    }
}
?>
