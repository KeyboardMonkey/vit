		<section class="container">
	<section class="content-md">
		<section class="title">
			<h2>0</h2>
			<h4>Total Points</h4>
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
			<h4>My Courses</h4>
			<ul>
			<?php 
			$myEnrolements = $this -> course_enrollment -> getWithCondition(array('user_id' => $this -> session -> userdata('user_id')));
			foreach($myEnrolements as $myEnrolment)
			{
			   $myCourse = new course();
			    $myCourse -> load($myEnrolment->course_id);
			    $myCourseId = $myCourse -> course_id;
			   ?>
				<li>

					<a href="<?=base_url();?>index.php/courses/course_playback/<?=$myCourseId;?>"><?=$myCourse->full_name;?></a>
				</li>
			   <?php

			}
			?>
				
			</ul>
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
		<section class="top-students">
			<h3>Top 3 Students</h3>
			<section class="first-trophy">
				<section class="content">
					<img src="<?=base_url();?>assets/graphics/trophy1.svg" width="100px" height="111px" />
					<a href="">Kashif Nadeem</a>
					<p>3025 Points</p>
				</section>
			</section>
			<section class="second-trophy">
				<section class="content">
					<img src="<?=base_url();?>assets/graphics/trophy2.svg" width="100px" height="111px" />
					<a href="">Qamar Abbasi</a>
					<p>2905 Points</p>
				</section>
			</section>
			<section class="third-trophy">
				<section class="content">
					<img src="<?=base_url();?>assets/graphics/trophy3.svg" width="100px" height="111px" />
					<a href="">Shehroz Malik</a>
					<p>2900 Points</p>
				</section>
			</section>
		</section>
	</section>
	
	</section>
	
	<section class="clear"></section>