<section class="container">
	
	<section class="content-lg">
		<h2 class="course-heading"><?=$course->full_name;?></h2>
		<ul class="course-desc">
		
			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Category: <?=$course->getCategoryTitle();?></li>
			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Level: <?=$course->difficulty_level;?></li>
			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Points: <?=$course->points;?></li>
			<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>Enrol Count: <?=$course->enrollmentCount();?></li>
		</ul>

		<?php
		/*if($course -> isUserEnrolled($this -> session -> userdata('user_id')))
		{
			if($course -> isRatedByUser())
			{
				echo   "My Rating: " . $course -> getRatingByUser();
			}
			else
			{
				echo '<a href="' . base_url() . 'index.php/courses/ratecourse/' . $course -> course_id . '/5"> Rate 5 Stars! </a>';
			}
		}
		else 	
			<form class="enroll-me" action="<?=base_url();?>index.php/courses/enrollme/<?=$course -> course_id;?>">
				<input type="submit" name="submit" value="Enroll Me!" />
			</form>*/
			?>

				<form class="enroll-me" action="<?=base_url();?>index.php/courses/enrollme/<?=$course -> course_id;?>">
				<input type="submit" name="submit" value="Enroll Me!" />
			</form>

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
											<h3>What is UX?</h3>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<ul class="course-content">
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>A Brief History of UX.</li>
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>The Foundation of UX.</li>
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>The Importance of UX.</li>
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>What is UX?</li>
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>A Brief History of UX.</li>
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>The Foundation of UX.</li>
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>The Importance of UX.</li>
												<li><span><img src="<?=base_url();?>assets/graphics/bullet.svg" width="40px" height="40px" /></span>What is UX?</li>
											</ul>
										</section>
									</section><!-- /content -->
								</section><!-- /tabs -->
							</section>
						</section>

						<section class="content-lg">
							<h3 class="widget-similar-courses">Similar Courses</h3>
							<section class="widget-similar-courses">
								<img src="<?=base_url();?>assets/graphics/course-thumbnail.png" width="194px" height="122" />
								<h4>A Beginner's Guide to Production Linux</h4>
								<p>Let to run your own secure web server on Linux.</p>
								<ul class="course-desc">
									<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>755</li>
								</ul>
								<section class="clear"></section>
							</section>
							<section class="widget-similar-courses">
								<img src="<?=base_url();?>assets/graphics/course-thumbnail.png" width="194px" height="122" />
								<h4>A Beginner's Guide to Production Linux</h4>
								<p>Let to run your own secure web server on Linux.</p>
								<ul class="course-desc">
									<li><span><img src="<?=base_url();?>assets/graphics/tech-feeds.svg" width="15px" height="15px" /></span>755</li>
								</ul>
								<section class="clear"></section>
							</section>
						</section>

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

