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
    public $created_by = 1;


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

    public function getCategoryCourseCount($tempy)
    {

        $county=NULL;
        $course_count = $this -> course -> get();
        foreach($course_count as $count)
        {
        
            if ($count -> category == $tempy) 
            {

                $county++;                                  
            }                              
        }
        return $county;

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
    public function getOverAllRating()
    {
        $ratings  = $this -> course_rating -> getWithCondition(array('course_id' => $this -> course_id));
        $score = 0;
        foreach($ratings as $rating)
        {
            $score += $rating -> rating;
        }
        $count = (count($ratings));
        if($count == 0) $count = 1;
        return (int) ($score / $count);
    }
    public function isUserEnrolled($user_id=NULL)
    {
        if($user_id==NULL)
            $user_id=$this -> session -> userdata('user_id');
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
            
            -> Course Recommendation Points System
                a - Number of Registered, Users = 0.1 point per user. MULTIPLIED BY USER INTEREST
                b - User Ratings (Per User):
                        i-      If User Has less than 50% completed then 0.3 points per user MULTIPLIED BY USER INTEREST
                        ii-     If User has less than 75% competed then 0.4 points per User MULTIPLIED BY USER INTEREST
                        iii -   If User has more than 90% completed then 0.5 points per user MULTIPLIED BY USER INTEREST
                c - User Ratings (Per Star):
                         i-      If User Has less than 50% completed then 0.3 points per star MULTIPLIED BY USER INTEREST
                        ii-     If User has less than 75% competed then 0.4 points per star MULTIPLIED BY USER INTEREST
                        iii -   If User has more than 90% completed then 0.5 points per star MULTIPLIED BY USER INTEREST

                d - Courses Completed from the same category:
                        i-      If User Has less than 50% completed then 0.3 points per course MULTIPLIED BY USER INTEREST
                        ii-     If User has less than 75% competed then 0.4 points per course MULTIPLIED BY USER INTEREST
                        iii -   If User has more than 90% completed then 0.5 points per course MULTIPLIED BY USER INTEREST
                e - Courses Rated (By himself):
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
    public function enrollmentCount(){
        $enrollment = new course_enrollment();
        $enrollments = $enrollment -> getWithCondition(array('course_id' => $this -> course_id));
    return count($enrollments);
        }
        public function getNextLecture()
        {
            $allLectures = $this -> lecture -> getWithCondition(array('course_id' => $this -> course_id));
            $i = 0;
            foreach ($allLectures as $key => $lecture) {
                
                $lecture_progress = $this -> user_lecture_progress -> getWithConditionLimit1(array('lecture_id' => $lecture -> lect_id));
                if($lecture_progress -> progress < 100)
                {
                  return $i;
                }
                $i++;
            }
            return 0;
        }
        public function getLectures()
    {
      $lectures = $this -> lecture -> getWithCondition(array('course_id' => $this -> course_id));
      return $lectures;
    }
    public function getFinishedLecture()
    {
        $lectures = $this -> getLectures();
        $returnLectures = array();
        foreach ($lectures as $key => $lecture) {
          $user_lecture_progress = new user_lecture_progress();
          $user_lecture_progress = $this -> user_lecture_progress -> 
          getWithConditionLimit1(
                                      array('user_id' => $this -> session -> userdata('user_id')
                                              ,'lecture_id' => $lecture->lect_id
                                      )
                                    );
          if($user_lecture_progress->progress == 100)
            array_push($returnLectures, $lecture);
        }
        return $returnLectures;
    }
    public function getLectureProgress()
    {
        $finishedLectures = $this -> getFinishedLecture();
        $totalLectures = $this -> getLectures();
        $count = count($totalLectures);
        
        if($count == 0) $count = 1;
        return (count($finishedLectures) / $count ) * 100;

    }
    public function getCourseProgressPercent()
    {
        $lecture = $this -> getLectureProgress() * 60 / 100;
        if($this -> quizTaken()) $lecture += 20;
        return $lecture;
    }
    public function reviewedByUser($user_id = NULL)
    {
        return $this -> course_review -> reviewSubmittedByUser($this -> course_id, $user_id);
    }
    public function isCourseFinishedByUser()
    {
        if($this->getLectureProgress() == 100) return TRUE;
        else return FALSE;
    }
    public function getRandomQuestions($limit=-1)
    {
            if($limit == -1)
                $limit = $this -> config -> item('max_quiz_questions');
                $quiz = new quiz_model();
                $quiz = $quiz -> getWithConditionLimit1(array('course_id' => $this -> course_id));
                //print_r($quiz);
                $questions = $this -> quiz_question -> getWithCondition(array('quiz_id' => $quiz -> quiz_id));
                
               if(count($questions)< 1) return array();
               if(count($questions) < 11) return $questions;
                $random_questions = array();
                $keys = array();
                foreach($questions as $key => $question)
                {
                    array_push($keys, $key);
                }
                $i = 0;
                while(count($random_questions) < $limit)
                {
                    $rand = rand(0, 1);
                    if($rand == 1)
                    {
                       $question = $questions[$keys[$i]]; 
                      if(!isset($random_questions[$question -> question_id]))
                      {
                          $random_questions[$question -> question_id] = $question;
                      }
                    }
                    $i ++;
                    if($i >= count($questions))
                    {
                        if(count($questions) < $limit)
                        {
                           goto BREAK_THE_LOOP_AND_AAM_THE_CHOOP;
                        }
                            
                    }
                    $i = ($i % count($questions));
                }
                BREAK_THE_LOOP_AND_AAM_THE_CHOOP:
                return $random_questions;
    }
    public function quizTaken($user_id = NULL)
    {
        if($user_id == NULL)
        $user_id = $this -> session -> userdata('user_id');
        $quiz = new quiz_model();
        $quiz = $quiz -> getWithConditionLimit1(array('course_id' => $this -> course_id));
        $answers = $this -> question_answer -> getWithCondition(array('user_id' => $user_id, 'quiz_id' => $quiz -> quiz_id));
        return count($answers) > 0;
        
    }
    public function getCorrectAnswers($user_id = NULL)
    {
        if($user_id == NULL)
        $user_id = $this -> session -> userdata('user_id');
        $quiz = new quiz_model();
        $quiz = $quiz -> getWithConditionLimit1(array('course_id' => $this -> course_id));
        $answers = $this -> question_answer -> getWithCondition(array('user_id' => $user_id, 'quiz_id' => $quiz -> quiz_id));
        $correct = 0;
        foreach($answers as $answer)
        {
            $question = new quiz_question();
            $question -> load($answer->quiz_id);
            if($question -> correct_answer == $answer -> answer) $correct ++;
        }
        
        return $correct;
    }
    public function getQuizEarnedPoints($user_id=NULL)
    {
         if($user_id == NULL)
        $user_id = $this -> session -> userdata('user_id');
        $totalPoints = $this -> points;
        $totalQuestions = $this -> config -> item('max_quiz_questions');
        $correctQuestions = $this ->getCorrectAnswers($user_id);
        $earnedPoints = $totalPoints * $correctQuestions / $totalQuestions;
        return $earnedPoints;
                                            
    }
    public function getEarnedPoints($user_id=NULL)
    {
        return $this ->getQuizEarnedPoints($user_id);
    }
    public function getTracks()
    {
        $tracks_content = $this -> track_content -> getWithCondition(array('course_id' => $this -> course_id));
        $tracks = array();
        foreach ($tracks_content as $content)
        {
            $track = new track();
            $track -> load($content -> track_id);
            array_push($tracks, $track);
        }
        return $tracks;
        //print_r($tracks);
    }
   
            
    public function getTopStudents($limit=3)
    {
        $enrolments = new course_enrollment();
        $enrolments = $enrolments ->getWithCondition(array('course_id' => $this -> course_id));
        $students = array();
        $i = 0;
        foreach($enrolments as $enrolment)
        {
            $student = new user();
            $student -> load($enrolment -> user_id);
            $marks = $this ->getEarnedPoints($user_id);
            if(count($students) > 0)
            {
                for($i = 0; $i < count($students); $i ++)
                {
                    if($marks > $students[$i][1])
                    {
                        $students[$i+1] = $students[$i];
                        $students[$i][0] = $student;
                        $students[$i][1] = $marks;
                    }
                }
            }
            else{
                $students[0] = array($student, $points);
                
            }
        }
        $return = array();
        foreach($students as $student)
        {
            array_push($return, $student);
        }
        return $return;
    }
  /*  public function getContinuationTrack()
    {
        $tracks = $this ->getTracks();
        
        $continuation = new track();
        foreach($tracks as $track)
        {
            $track_content = new track_content();
            $track_content = $track_content ->getWithCondition(array('course_id' => $this -> course_id,
                        'track_id' => $track -> $track_id
                ));
            $indexInThisTrack = $this -> track_content -> getWithConditionLimit1(array('course_id' => $this -> course_id,
                        'track_id' => $track -> $track_id
                ))->course_index;
            $i = 0;
            $AllPreviousFinished=TRUE;
            $AnyNextFinished=FALSE;
            foreach($track_content as $content)
            {
                $course = new course();
                $course -> load($content -> course_id);
                if($course->getLectureProgress() < 100)
                {
                    $AllPreviousFinished = FALSE;
                    break;
                }
                $continuation = TRUE;
                if($i  == $indexInThisTrack)
                {
                    if($course->getLectureProgress() < 100)
                    {
                        $AnyNextFinished = FALSE;
                        break;
                    }
                }
            }
            
        }
        
    }*/
}