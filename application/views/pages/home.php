<?php

		$myCourse = new course();
        $cats = $this -> course_cat -> get();
        $total = 0;
         foreach($cats as $cat)
         {
             $total += $cat->getPointsEarnedInCategory();
         }
?>
<section class="container">
	<section class="content-md">
		<section class="title">
			<h2><?=$total;?></h2>
			<h4>Total Points</h4>
		</section>
		<section class="line-border"></section>
		<section class="course-cols">
                     <section class="col1">
				<ul class="cols">
                    <?php 
                    $col = 1;
                    
                    $i = 0;
                            foreach($cats as $cat)
                            {
                                ?>
                               
                    <?php
                                
                                $courses = $cat -> getCourses();
                               
                    ?>
			
                                    
					<li class="<?= $cat -> color_tag;?>"><strong><?=$cat->getPointsEarnedInCategory();?></strong><br/><?=$cat -> category ;?></li>
					
                              
                    <?php
                            $i ++;
                            if($i == 4)
                            {
                                $i = 0;
                                $col ++;
                                echo '</ul></section> <section class="col'.$col.'">
				<ul class="cols">';
                                
                            }
                            } 
                     ?>
                                          </ul>
			</section>
			
			<section class="clear"></section>
		</section>
		<section class="line-border"></section>
		<section class="info">
			<img src="<?=base_url();?>assets/graphics/info.png" width="50px" height="50px" alt="info" />
			<p>Points are earned whenever you take an important action on Vitorials.
			<br/><a href="">Learn more</a> about when and how points are earned.</p>
		</section>
	</section>
	
	<section class="content-md">
	<?php
	$myTracks = new tracks_enrollment();
	$myTracks = $myTracks -> getMyEnrolledTracks($this -> session -> userdata('user_id'));
	//print_r($myTracks);
	//die();
	foreach ($myTracks as $myTrack) {
		//print_r($myTrack);
	?>
		<section class="track-progress">
			<h2><?=$myTrack->track_title;?></h2>
			<section class="progress-bar">
			<?=$progress = number_format($myTrack->getProgress());?>%
			</section>
			<a class="resume-track" href="<?=base_url();?>index.php/tracks/resume/<?=$myTrack->track_id;?>">Resume Track</a>
		</section>
	<?php
	}
	?>

		

	</section>

	<?php 
	$myEnrolements = $this -> course_enrollment -> getWithCondition(array('user_id' => $this -> session -> userdata('user_id')));
	?>
	<section class="content-md">

	
<?php
  if($this->course_enrollment -> getMyEnrolledCourses ($this -> session -> userdata('user_id'))>0)
	{	

		$myEnrolements = $this -> course_enrollment -> getWithCondition(array('user_id' => $this -> session -> userdata('user_id')));
		foreach($myEnrolements as $myEnrolment)
		{
		    
		    $myCourse -> load($myEnrolment->course_id);
		    $myCourseId = $myCourse -> course_id;
		?>
           
		<section class="registered">
			<section class="my-courses">
				<section class="color-tag">
					<a href="<?=base_url();?>index.php/library/index/category/<?=$myCourse->getCategory()->id;?>" class="<?=$myCourse->getCategory()->color_tag;?>"><?=$myCourse->getCategoryTitle();?></a>
				</section>
				<h5 class="level"><?=$myCourse->difficulty_level;?></h5>
				<section class="clear"></section>
				<a href="<?=base_url();?>index.php/courses/view/<?=$myCourseId;?>"><h4 class="course-name"><?=$myCourse->full_name;?></h4></a>
				<section class="clear"></section>
				<p class="points"><?=$myCourse->points;?> Points</p>
				<h4 class="rating">Rating: <?=$myCourse->getOverAllRating();?> (<?=$myCourse->numberOfRatings();?>)</h4>
				<section class="clear"></section>
		

				<section class="progress-bar-mini">
		
					<div class="pro-bar-container color-nephriti bm-remove">
		            <div id="small_pro_bar" class="pro-bar color-emerald" data-pro-bar-percent="<?=$myCourse -> getCourseProgressPercent();?>" data-pro-bar-delay="500">
		                <span class="pro-bar-percentage" id="small_pro_bar_percent"><?=$myCourse -> getCourseProgressPercent();?>%</span>
		                <div class="pro-bar-candy candy-ltr"></div>
		            </div>
		        	</div>
		        </section>
			<!-- 	<a href="<?=base_url();?>index.php/courses/view/<?=$myCourse->course_id;?>" class="learn-now">Resume</a> -->
				<button data-resume_id="<?=$myCourse -> course_id;?>" class="default btn_resume" type="button">Resume Course</button>



			</section>
		</section> 
			<?php
			}
		}
		else{
			?>
		<section class="not-registered">
			<h3>You haven't registered any course yet.<br /><small>If you want to registered any of our courses then visit our <a href="<?=base_url();?>index.php/library">Course Library</a></h3></small></h3>
		</section>
<?php
}
?>
	</section> <!-- end of the first content-md -->
	
	<section class="content-md">
		<section class="popular-courses">
			<h3>Popular Courses</h3>
			<ul class="course-widget">
				<li><a href=""><i class="fa fa-play-circle"></i>Programming Fundamentals</a></li>
				<li><a href="">Introduction to Android</a></li>
				<li><a href="">Windows Phone Development</a></li>
			</ul>
		</section>
		<section class="new-courses">
			<h3>New Courses</h3>
			<ul class="course-widget">
				<li><a href="">Cloud Computing</a></li>
				<li><a href="">Windows Store Authorization</a></li>
				<li><a href="">Introduction to ASP.NET MVC</a></li>
			</ul>
		</section>
		<section class="clear"></section>
	</section>
	
	</section>
	
	<section class="clear"></section>

	<!-- Scripts for this page -->

                <script>
                    $(document).ready(function(){
                        $('.btn_resume').click(function(){
                        	var course_id = $(this).attr('data-resume_id');
                            window.location = '<?=base_url();?>index.php/courses/course_playback/'+course_id;
                        });
                    });
                    </script>