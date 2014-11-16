<?php

print_r($course);

if($course -> isUserEnrolled($this -> session -> userdata('user_id'))){
   if($course -> isRatedByUser()){
     echo   "My Rating: " . $course -> getRatingByUser();
   }
   else{
      echo '<a href="' . base_url() . 'index.php/courses/ratecourse/' . $course -> course_id . '/5"> Rate 5 Stars! </a>';
   }
}else echo '<a href="' . base_url() . 'index.php/courses/enrollme/' . $course -> course_id . '"> Enroll Me! </a>';
?>


