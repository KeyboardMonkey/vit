<?php 
			$enrollement = new course_enrollment();
			$enrollement = $this -> course_enrollment -> getWithConditionLimit1(array('user_id' => $this -> session -> userdata('user_id'), 'course_id' => $course -> course_id));
	        $enrol_date = $enrollement -> enrol_time;
			$enrol_date_formatted=date("D, d M Y",strtotime($enrol_date));
		

			//print_r($enrollement);
?>

<style type="text/css">
	.ratingButton{background: #ccc; margin-right: 20px; height: 23px; display: inline; float: right;}
	.ratingButton a {text-decoration: underline;}

</style>

<section class="container">

	<section class="content-lg">
		<h2 class="course-heading"><?=$course->full_name;?></h2>
		<ul class="course-desc">

			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Category: <?=$course->getCategoryTitle();?></li>
			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Level: <?=$course->difficulty_level;?></li>
			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Points: <?=$course->points;?></li>
			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Times Enrolled: <?=$course->enrollmentCount();?></li>
		<?php
			if($course -> isUserEnrolled($this -> session -> userdata('user_id')))
			{
				echo "<li><span><img src=\"".base_url()."assets/graphics/tech-feeds.svg\" width=\"15px\" height=\"15px\" /></span>Enrolled on: ".$enrol_date_formatted."</li>";
			}
		?>
		</ul>

		<?php
		if($course -> isUserEnrolled($this -> session -> userdata('user_id')))
		{
	


			if($course -> isRatedByUser())
			{
				echo '<div class="ratingButton">';
				echo   "My Rating: " . $course -> getRatingByUser();
				echo '</div>';
			}
			else
			{
				echo '<div class="ratingButton">';
				echo '<a href="' . base_url() . 'index.php/courses/ratecourse/' . $course -> course_id . '/5"> Rate 5 Stars! </a>';
				echo '</div>';
			}
		}
		else 	
		{ 
			echo "<form class=\"enroll-me\" action=\"".base_url()."index.php/courses/enrollme/".$course -> course_id."\">";
			echo "<input type=\"submit\" name=\"submit\" value=\"Enroll Me!\" /></form>";
		}
		?>


		<section class="clear"></section>
		<p class="course-desc"><?=$course->tiny_intro;?></p>
		<p class="developed-by">Developed By: <?=$course->developed_by;?></p>
		<section class="clear"></section>
	</section>

	<section class="content-lg">
		<section>
			<section class="tabs tabs-style-underline">
				<nav>
					<ul>
						<li><a href="#section-underline-1" class="icon icon-home"><span>Overview</span></a></li>
						<li><a href="#section-underline-2" class="icon icon-gift"><span>Reviews</span></a></li>
						<li><a href="#section-underline-3" class="icon icon-upload"><span>Content</span></a></li>
					</ul>
				</nav>
				<section class="content-wrap">
					<section id="section-underline-1">
						<img src="<?=base_url();?>assets/graphics/overview-video.jpg" width="940px" height="480px" />
						<p class="video-desc"><?=$course->description;?></p>
						<h4>What You'll Learn</h4>
						<ul>
							<li><?=$course->learning_outcome;?></li>
						</ul>
						<h4>Who Should Do This</h4>
						<p><?=$course->target_audience;?></p>
					</section>
					<section id="section-underline-2">
						<h5>John Doe:</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<p>
							<h5>John Doe:</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<p>
								<h5>John Doe:</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<p>
									<h5>John Doe:</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<p>
										<h5>John Doe:</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<p>
										</section>
										<section id="section-underline-3">
							
							<a id="course-content" href=""><img src="<?=base_url();?>assets/graphics/arrow-down.png" width="20px" height="17px" alt="arrow-down" /><h3 id="course-content">What is UX?</h3></a>
							<ul class="course-content">
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">A Brief History of UX.</a></li>
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">The Foundation of UX.</a></li>
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">The Importance of UX.</a></li>
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">What is UX?</a></li>
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">A Brief History of UX.</a></li>
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">The Foundation of UX.</a></li>
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">The Importance of UX.</a></li>
								<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><a href="">What is UX?</a></li>
							</ul>
						</section>
									</section><!-- /content -->
								</section><!-- /tabs -->
							</section>
						</section>
<!-- similar courses widget  -->
					</section>

					<section class="clear"></section>
					<!-- SCRIPTS FOR THIS PAGE -->
					<script src="<?=base_url();?>assets/js/course-intro-tabs.js"></script>
					<script>
						(function() {

							[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
								new CBPFWTabs( el );
							});

						})();
					</script>

