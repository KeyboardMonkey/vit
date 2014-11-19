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
       // echo ">> {$user_id}";
        if($user_id == NULL)
        $user_id = $this -> session -> userdata('user_id');
      //  echo ">>>> {$user_id}";
        $courses = $this ->getCourses();
        $points = 0;
        foreach($courses as $course)
        {
            if($course -> isUserEnrolled($user_id))
            {
              //  echo "user {$user_id} scored " . $course -> getEarnedPoints($user_id) . " in {$course -> tiny_intro} <br />";
                $points += $course -> getEarnedPoints($user_id);
            }
        }
        return $points;
    }
    
    public function getLeaders($limit = 5)
    {
        return $this -> user -> getLeaders($this -> id, $leader_count = 3);
    }
}
?>
