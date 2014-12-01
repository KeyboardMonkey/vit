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

   <section class="breadcrumb">
        <h2><a href="<?=base_url();?>index.php/home">HOME</a> / <a href="<?=base_url();?>index.php/library">LIBRARY</a> / COURSE INTRODUCTION</h2>
    </section>
<section class="container">

	<section class="content-lg">
		<section id="goto-course">
			<?php
			if($course -> isUserEnrolled($this -> session -> userdata('user_id')))
			{
				echo "<a class=\"default\" href=\"" . base_url('index.php/courses/course_playback/' . $course -> course_id) . "\">Play Course --&gt;</a>";
			}
			?>
		</section>
		<h2 class="course-heading"><?=$course->full_name;?></h2>
		<p class="developed-by"><span id="developed-by"><img src="<?=base_url();?>assets/graphics/developed-by.png" width="25px" height="21px" /></span>Developed By: <?=$course->developed_by;?></p>
		<section class="clear"></section>

		<ul class="course-desc">
			<li><span id="category"><img src="<?=base_url();?>assets/graphics/category.png" width="20px" height="20px" /></span>Category: <?=$course->getCategoryTitle();?></li>
			<li><span id="level"><img src="<?=base_url();?>assets/graphics/level.png" width="30px" height="30px" /></span>Level: <?=$course->difficulty_level;?></li>
			<li>
				<span id="points"><img src="<?=base_url();?>assets/graphics/points.png" width="17px" height="25px" />
				</span>
				Points: <?=$course->points;?>
				<?php 
				if($course->isUserEnrolled())
				{
					echo "(Earned: " . $course -> getEarnedPoints() . ")";
				}
				?>
			</li>

			<?php

			echo '<li>
					<span id="enrolled-students">
						<img src="'.base_url().'assets/graphics/enrolled-students.png" width="25px" height="18px" />
					</span>
					Times Enrolled: '. $course->enrollmentCount().'
				  </li>';
			
				if($course->isUserEnrolled())
				{
					
					echo "<li><span id=\"enrolled-on\"><img src=\"".base_url()."assets/graphics/enrolled-on.png\" width=\"30px\" height=\"30px\" /></span>Enrolled on: ".$enrol_date_formatted."</li>";
				
				}
				?>
		</ul>
		<section class="clear"></section>
		<?php
		if($course -> isUserEnrolled($this -> session -> userdata('user_id')))
		{
			if($course -> isRatedByUser())
			{
				echo '<div class="ratingButton"  data-average="' . $course -> getRatingByUser() .'">';
			//	echo   "My Rating: " . $course -> getRatingByUser();
				echo '</div>';
                ?>
                <script>
                    $(document).ready(function(){
                        $(".ratingButton").jRating({
                            step: true,
                            length: 5,
                            rateMax: 5,
                            canRateAgain: true,
                            sendRequest: false,
                            isDisabled: true,
                            onSuccess: function(element, rate){
                                //alert('rating ok');
                            },
                            onError: function(){
                                //alert('error');
                            }
                        });
                    });
                </script>
        <?php
			}
			else
			{
				echo '<div class="ratingButton" data-average="0">';
				//echo '<a href="' . base_url() . 'index.php/courses/ratecourse/' . $course -> course_id . '/5"> Rate 5 Stars! </a>';
				echo '</div>';
                ?>
                <script>
                    $(document).ready(function(){
                            $(".ratingButton").jRating({
                            step: true,
                            length: 5,
                            rateMax: 5,
                            canRateAgain: true,
                            phpPath: '<?=base_url('index.php/courses/ratecourse/' . $course -> course_id);?>',
                            onSuccess: function(element, rate){
                                //alert('rating ok');
                            },
                            onError: function(){
                                //alert('error');
                            }
                        });
                    });
                </script>
            <?php
			}
		}
		else
		{ 
			echo "<form class=\"enroll-me\" action=\"".base_url()."index.php/courses/enrollme/".$course -> course_id."\">";
			echo "<input type=\"submit\" name=\"submit\" value=\"Enroll Me!\" /></form>";
		}
		?>

		<p class="course-desc"><?=$course->tiny_intro;?></p>
		<section class="clear"></section>
	</section>

	<section class="content-lg">
		<section>
			<section class="tabs tabs-style-underline">
				<nav>
					<ul>
						<li><a href="#section-underline-1" class="icon icon-home"><span>Overview</span></a></li>
						<li><a href="#section-underline-2" class="icon icon-gift"><span>Course Summary</span></a></li>
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
						<?php

						if($course -> isUserEnrolled($this -> session -> userdata('user_id')))
						{
							if($course -> isCourseFinishedByUser())
							{
								if($course -> reviewedByUser())
								{
									$review = new course_review();
									$review = $review -> getWithConditionLimit1(array('course_id' => $course -> course_id, 'user_id' => $this -> session -> userdata('user_id')));
									?>

									<h3> My Summary </h3>
									<br />
									<p> <?=$review->review;?></p>
									<?php
								}
								else{
									?>
									<h5> Please Submit Summary Here! </h5>
									<form action='<?=base_url("index.php/courses/submit_review/{$course->course_id}");?>' method='post'>
										<label>Course Summary</label>
											<textarea width='500px' height='500px' name='review'>

											</textarea>
											<input type='submit' value='Submit' />
										</form>
										<?php
									}
								}
								else{
									?>
									<h5>Please finish course first.</h5>
									<?php 
								}
							}
							else{
								?>

								<h5> Please enroll into the course first. </h5>

								<?php 
							}
							?>
						</section>

						<section id="section-underline-3">

							<a id="course-content" href="#"><img src="<?=base_url();?>assets/graphics/arrow-down.png" width="20px" height="17px" alt="arrow-down" /><h3 id="course-content">What is UX?</h3></a>
							<ul class="course-content">
								<?php
								$lectures = $this -> lecture -> getWithCondition(array('course_id' => $course -> course_id));
								$i = 0;
								foreach($lectures as $lecture)
								{
									?>
									<li> <a href="<?=base_url('index.php/courses/course_playback/' . $course -> course_id . '/' . $i);?>"> <span> <img src="<?=base_url();?>assets/graphics/bullet.svg" width="25px" height="25px" /></span><?=$lecture->vid_title;?></a> </li>
									
									<?php
									$i ++;
								}
								?>
							</ul>
						</section>
					</section><!-- /content -->
				</section><!-- /tabs -->
			</section>
		</section>
		<!-- similar courses widget  -->
	</section>

	<section class="clear"></section>
	<!-- TABS SCRIPTS FOR THIS PAGE  -->
	<script src="<?=base_url();?>assets/js/course-intro-tabs.js"></script>
	<script>
		(function() {

			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});

		})();
	</script>

<!-- 	<script type="text/javascript">
$("#course-content").on("click",function(){
console.log($(this).text());
});</script> -->

<?php
$topStudents = $course -> getTopStudents();
//print_r($topStudents);
if(count($topStudents)>1)
{
//print_r($topStudents);	?>
	<section class="content-lg">
		<section class="top-students">
			<h3>Top  Students In This Course</h3>
			<section id="trophies">

					<section class="second-trophy">
						<section class="content">
							<img src="<?=base_url();?>assets/graphics/trophy2.svg" width="100px" height="111px">
							<section id="block-b"></section>
							<section id="block-c"><p><?=$course -> getEarnedPoints($topStudents[1]->user_id);?> Points</p></section>
							<section id="block-d"><a href="<?=base_url('index.php/profile/index/' . $topStudents[1] -> user_id) ;?>"><?=$topStudents[1]->first_name." ".$topStudents[1]->last_name;?></a></section>
						</section>
					</section>

				<?php if(count($topStudents) > 0)
				{
					?>
				<section class="first-trophy">
					<section class="content">
						<img src="<?=base_url();?>assets/graphics/trophy1.svg" width="100px" height="111px">
						<section id="block-a"></section>
						<section id="block-b"></section>
						<section id="block-c"><p><?=$course -> getEarnedPoints($topStudents[0]->user_id);?> Points</p></section>
						<section id="block-d"><a href="<?=base_url('index.php/profile/index/' . $topStudents[0] -> user_id) ;?>"><?=$topStudents[0]->first_name." ".$topStudents[0]->last_name;?></a></section>
					</section>
				</section>

					<?php
				}
				if(count($topStudents) > 2)
				{
					?>

					<section class="third-trophy">
						<section class="content">
							<img src="<?=base_url();?>assets/graphics/trophy3.svg" width="100px" height="111px">
							<section id="block-c"><p><?=$course -> getEarnedPoints($topStudents[2]->user_id);?> Points</p></section>
							<section id="block-d"><a href="<?=base_url('index.php/profile/index/' . $topStudents[2] -> user_id) ;?>"><?=$topStudents[2]->first_name." ".$topStudents[2]->last_name;?></a></section>
						</section>
					</section>

				</section>
			</section>
		</section>

		<?php }} ?>
		</section>
		</section>
		</section>

