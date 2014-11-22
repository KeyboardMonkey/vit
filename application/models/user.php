<?php
class user extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'users';
  const DB_TABLE_PK = 'user_id';
  public $user_id;
  public $email;
  public $password;
  public $type = "USER";
  public $active = "Yes";
  public $last_login;
  public $hash = "5d6c48cd6d651753324ff8441b4718344ffd7f7559e2a92d330b99b88926dff2f03f9d4c04fd3565db4139309ee885e7a0c9b1ace912a320024e701f54a23108";
  public $register_date;
  public $username;
  public $logged_in = "0";
  public $first_name;
  public $last_name;
  public $city;
  public $country;
  public $intro;
  public $avatar;
  public $fb_url;
  public $twitter_url;
  public $linkedin_url;
  public $gplus_url;
  
  public function getAllPoints($user_id = NULL)
  {
      if($user_id==NULL)
          $user_id = $this -> user_id;
        $cats = $this -> course_cat -> get();
        $total = 0;
         foreach($cats as $cat)
         {
           //  echo "Userid: {$user_id} Points in Category: {$cat->getPointsEarnedInCategory($user_id)} <br /> <br />";
             $total += $cat->getPointsEarnedInCategory($user_id);
         }
        // die();
         return $total;
  }
  public function getLeaders($course_cat=NULL, $leader_count = 3)
  {
      $users = $this -> user -> get();
      $points = array();
    if($course_cat == NULL)  $courses = $this -> course -> get();
    else $courses = $this -> course -> getWithCondition(array('category' => $course_cat));
      foreach($users as $user)
      {
          $points[$user -> user_id] = 0;
          foreach($courses as $course)
          {
                if($course -> isUserEnrolled($user -> user_id))
                {
                  //  echo "course {$course -> course_id} is enrolled by {$user -> username}<br/>";
                      $points[$user -> user_id] += $course -> getEarnedPoints($user -> user_id);
                    //  echo "course {$course -> course_id} user {$user -> username} points {$points[$user -> user_id]}<br/>";
                }
          }
      }
      arsort($points);
     // print_r($points);
     // die();
      foreach ($points as $user_id => $user_points)
      {
         // echo "USER: {$user_id} Points: {$user_points} <br /> <br />";
      }
      //die();
      $returnusers = array();
      $i = 0;
      foreach ($points as $user_id => $user_points)
      {
          $user = new user();
          $user -> load($user_id);
          array_push($returnusers , $user);
          if($i >= $leader_count)
          {
              break;
          }
          $i ++;
      }
//      asort($points);
      return $returnusers ;
  }
  
  // Comparison function
public  function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}
}
?>
