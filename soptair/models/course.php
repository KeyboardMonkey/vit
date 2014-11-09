<?php

class course extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'courses';
  const DB_TABLE_PK = 'course_id';
  
    public $course_id;
    public $full_name;
    public $tiny_intro;
    public $course_thumbnail;
    public $category;
    public $difficulty_level;
    public $status;
    public $description;
    public $points = 100;
    public $developed_by;
    public $learning_outcome;
    public $target_audience;
    public $section_title;
    public $video_title;
    public $video_file;
    public $srt;
    public $full_course_files_zip;
    public $additional_file_title;
    public $additional_file;
    public $is_new;
    public $created_date;
    public $updated_date;


    public function getCategoryTitle(){
        $_category = new course_cat();
        $_category->load($this->category);
        return $_category -> category;
    }
    public function getCategory(){
        $_cat = new course_cat();
        $_cat -> load($this->category);
        return $_cat;
    }
    public function courseRatedByMe(){
        
    }
    public function isRatedByUser($user_id = NULL){
        if($user_id != NULL)
        return $this -> course_rating -> hasUserRatedCourse($this -> course_id, $user_id);
        else
        return $this -> course_rating -> hasUserRatedCourse($this -> course_id, $this -> session -> userdata('user_id'));
    }
    public function getRatingByUser($user_id = NULL){
          if($user_id != NULL)
        $rating = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id, 'user_id' => $user_id));
        else 
            $rating = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id, 'user_id' => $this -> session -> userdata('user_id')));
        echo "<hr />";
          if(count($rating > 0)){
              foreach ($rating as $_rating) return $_rating -> rating;
          }
          return $rating -> rating;
        //return $this -> course_rating -> hasUserRatedCourse($course_id, $user_id) -> rating;
    }
    public function numberOfRatings()
    {
        $ratings  = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id));
        return count($ratings);
    }
    public function getOverAllRating(){
        $ratings  = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id));
        $score = 0;
        foreach($ratings as $rating){
            $score += $rating -> rating;
        }
        $count = (count($ratings));
        if($count == 0) $count = 1;
        return (int) ($score / $count);
    }
    public function isUserEnrolled($user_id){
        $enrollment = $this -> course_enrollment -> getWithCondition(array('user_id' => $user_id, 'course_id' => $this -> course_id));
        if(count($enrollment) > 0 ) return TRUE;
        else return FALSE;
        
    }
    public function getRecommendations()
    {
        /*
             USER INTEREST
                        -> 0 = NO INTEREST
                        -> 1 = NO OPINION
                        -> 2 = INTERESTED
            course points system
                a - Number of Registered, Users = 0.1 point per user. MULTIPLIED BY USER INTEREST
                b - User Rating:
                        i-      If User Has less than 50% completed then 0.3 points per user MULTIPLIED BY USER INTEREST
                        ii-     If User has less than 75% competed then 0.4 points per User MULTIPLIED BY USER INTEREST
                        iii -   If User has more than 90% completed then 0.5 points per user MULTIPLIED BY USER INTEREST
            User Ratings:
                         i-      If User Has less than 50% completed then 0.3 points per star MULTIPLIED BY USER INTEREST
                        ii-     If User has less than 75% competed then 0.4 points per star MULTIPLIED BY USER INTEREST
                        iii -   If User has more than 90% completed then 0.5 points per star MULTIPLIED BY USER INTEREST
         
        */
        $recommendations = array();
        $categories = $this -> course_cat -> get();
        $course_points = array();
        foreach($categories as $singleCat)
        {
            
            $categoryCourses = array();
            $course_points[$singleCat -> id] = array();
            $courses = $this -> course -> getWithCondition(array('category' => $singleCat -> id));
            //echo "A: ";
            
            $userInterestInCourse = $this -> user_interest_categories -> getWithConditionLimit1(array('user_id' => $this -> session -> userdata('user_id'), 'cat_id' => $singleCat -> id));
          
            if(!isset($userInterestInCourse->id)) continue;
            $interestValue = $userInterestInCourse -> interest_level;
            
            foreach($courses as $singleCourse)
            {
               // echo "B: ";
               // print_r($singleCourse);
                $course_points[$singleCat -> id][$singleCourse -> course_id] = 0;
              
                $enrollmentsInThisCategory = 0;
              //  echo "C:";
               // foreach($courses as $course)
                {
                    $enrollmentsInCourse = $this -> course_enrollment -> getWithCondition(array('course_id' => $singleCourse -> course_id));
                    $enrollmentsInThisCategory += count($enrollmentsInCourse);
                    $course_points[$singleCat -> id][$singleCourse -> course_id] += $enrollmentsInThisCategory * 0.1 * $interestValue;
                    foreach ($enrollmentsInCourse as $singleEnrollment)
                    {
                        $course_rating = new course_rating();
                        $course_rating ->getWithConditionLimit1(array('user_id' => $this -> session -> userdata('user_id'), 'course_id' => $singleEnrollment -> course_id));
                       // echo "1: ";
                        if($singleEnrollment -> progress < 50)
                        {
                             $course_points[$singleCat -> id][$singleCourse -> course_id] += count($enrollmentsInCourse) * 0.3 * $interestValue;
                           //  echo "1: ";
                             if(isset($course_rating -> id))
                             {
                                  $course_points[$singleCat -> id][$singleCourse -> course_id] += $course_rating -> rating * 0.3 * $interestValue;
                            
                             }
                        }
                        else if($singleEnrollment -> progress < 90)
                        {
                             $course_points[$singleCat -> id][$singleCourse -> course_id] += count($enrollmentsInCourse) * 0.4 * $interestValue;
                            // echo "2: ";
                             if(isset($course_rating -> id))
                             {
                                 $course_points[$singleCat -> id][$singleCourse -> course_id] += $course_rating -> rating * 0.4 * $interestValue;
                            
                             }
                        }
                        else 
                        {
                             $course_points[$singleCat -> id][$singleCourse -> course_id] += count($enrollmentsInCourse) * 0.5 * $interestValue;
                            //echo "3: ";
                             if(isset($course_rating -> id))
                             {
                                 $course_points[$singleCat -> id][$singleCourse -> course_id] += $course_rating -> rating * 0.4 * $interestValue;
                            
                             }
                        }
                    }
                }
                 
            }

        }
        
        foreach($course_points as $key => $arrays)
        {
            //$arrays = $this -> _sort_array($arrays);
            //echo "<br />";
            //print_r($arrays);
           // echo "<br />";
            $course_points[$key] = $arrays;
        }
         foreach($categories as $singleCat)
        {
             $recommendations[$singleCat -> id] = array();
             $i = 0;
             $courses = $this -> course -> getWithCondition(array('category' => $singleCat -> id));
               foreach($courses as $singleCourse)
               {
                   
                  //$recommendations[$singleCat -> id][$index] = array();
                  array_push($recommendations[$singleCat->id], array('points' => $course_points[$singleCat -> id][$singleCourse -> course_id], 'course_id' => $singleCourse -> course_id) );
                  //$recommendations[$singleCat -> id][$index]['points'] = $course_points[$singleCat -> id][$singleCourse -> course_id];
                  //$recommendations[$singleCat -> id][$index]['course_id'] = $singleCourse -> course_id;
               }
         }
         foreach ($recommendations as $key => $catRecom)
         {
            // echo "<br/>processing:";
          //  / print_r($catRecom);
            // echo "<br/>";
             if(count($catRecom) == 0) 
             {
                 unset($recommendations[$key]);
               // echo "removed:{$key}";
               // continue;
             }
             else
             {
                // echo ">".count($catRecom);
                for($i = 0; $i < count($catRecom); $i++)
                {
                    for($j = $i + 1; $j < count($catRecom); $j++)
                    {
                        if($catRecom[$j]['points'] > $catRecom[$j-1]['points'] )
                        {
                            $temp = $catRecom[$j];
                            $catRecom[$j] = $catRecom[$j -1];
                            $catRecom[$j - 1] = $temp;
                        }
                    }

                }
                for($i = 0; $i < count($catRecom); $i++)
                {
                    if($catRecom[$i]['points'] == 0) {
                        //echo "removing:" . $catRecom[$i]['points'] . "<br/>";
                        unset($catRecom[$i]);

                    }
                }
               // echo "<br />";
               // print_r($catRecom);
               // echo "<br />";
                $catRecom = array_slice($catRecom, 0, 5);
                $recommendations[$key] = $catRecom;
             } 
         }
         
    //   print_r($recommendations);
         return $recommendations;
    }
    public function _sort_array($array)
    {
        $keys = array();
     
        
    }
}