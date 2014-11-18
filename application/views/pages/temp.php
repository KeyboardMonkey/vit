<?php
        $cats = $this -> course_cat -> get();
        
?>
<section class="container">
	<section class="content-md">
		<section class="title">
			<h2>1,985</h2>
			<h4>Total Points</h4>
		</section>
		<section class="line-border"></section>
		<section class="course-cols">
                    <?php 
                            foreach($cats as $cat)
                            {
                                ?>
                         <section class="col1">
				<ul class="cols">
                    <?php
                                
                                $courses = $cat -> getCourses();
                                foreach($courses as $course)
                                {
                    ?>
			
                                    
					<li class="<?= $cat -> color_tag;?>"><strong>1,641</strong><br/><?=$course -> full_name;?></li>
					
				
                    <?php 
                                }
                    ?>
                                </ul>
			</section>
                    <?php
                            } 
                     ?>
			<section class="col2">
				<ul class="cols">
					<li class="android"><strong>18</strong><br/>Android</li>
					<li class="javascript"><strong>91</strong><br/>JavaScript</li>
					<li class="jquery"><strong>0</strong><br/>jQuery</li>
					<li class="css"><strong>180</strong><br/>CSS</li>
				</ul>
			</section>
			<section class="col3">
				<ul class="cols">
					<li class="cpp"><strong>7</strong><br/>C++</li>
					<li class="wordpress"><strong>193</strong><br/>WordPress</li>
					<li class="d-tools"><strong>7</strong><br/>Dev. Tools</li>
					<li class="business"><strong>0</strong><br/>Business</li>
				</ul>
			</section>
			<section class="col4">
				<ul class="cols">
					<li class="design"><strong>10</strong><br/>Design</li>
					<li class="other"><strong>10</strong><br/>Others</li>
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
					<a href="" class="">HTML</a>
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
					<a href="" class="">HTML</a>
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