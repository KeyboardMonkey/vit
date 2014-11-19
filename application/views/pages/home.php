<?php
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
		<section class="track-progress">
			<h2>WordPress Development</h2>
			<section class="progress-bar">
			</section>
			<a class="resume-track" href="<?=base_url();?>index.php/courses/course_playback">Resume Track</a>
		</section>
	</section>

	<?php 
	$myEnrolements = $this -> course_enrollment -> getWithCondition(array('user_id' => $this -> session -> userdata('user_id')));
	?>
	<section class="content-md">
			<!--
			<h3>My Courses</h3>
			<ol class="course-widget">
			<?php 
		//	$myEnrolements = $this -> course_enrollment -> getWithCondition(array('user_id' => $this -> session -> userdata('user_id')));
		//	foreach($myEnrolements as $myEnrolment)
			{
		//	   $myCourse = new course();
		//	    $myCourse -> load($myEnrolment->course_id);
		//	    $myCourseId = $myCourse -> course_id;
			?>
				<li>
					<a href="<?=base_url();?>index.php/courses/course_playback/<?=$myCourseId;?>"><?=$myCourse->full_name;?></a>
				</li>
			<?php
			}
			?>
			</ol>
			-->
		<section class="not-registered">
			<h3>You haven't registered any course yet.<br /><small>If you want to registered any of our courses then visit our <a href="#">Course Library</a></h3></small></h3>
		</section>


		<section class="registered">
			<section class="my-courses">
				<section class="color-tag">
					<a href="" class="html">HTML</a>
				</section>
				<h5 class="level">Intermediate</h5>
				<section class="clear"></section>
				<h4 class="course-name">Build a Simple Website</h4>
				<section class="clear"></section>
				<p class="points">50 Points</p>
				<h4 class="rating">Rating: -----</h4>
				<section class="clear"></section>
				<section class="progress-bar-mini"></section>
				<button class="default" type="button">Resume Track</button>
			</section>
			<section class="my-courses">
				<section class="color-tag">
					<a href="" class="html">HTML</a>
				</section>
				<h5 class="level">Intermediate</h5>
				<section class="clear"></section>
				<h4 class="course-name">Build a Simple Website</h4>
				<section class="clear"></section>
				<p class="points">50 Points</p>
				<h4 class="rating">Rating: -----</h4>
				<section class="clear"></section>
				<section class="progress-bar-mini"></section>
				<button class="default" type="button">Resume Track</button>
			</section>
		</section>

		
	</section>
	
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