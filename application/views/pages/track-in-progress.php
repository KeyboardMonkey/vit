<?php 
    $track = new track();
    $track -> load($track_id);
    $courses = $track ->getCourses();
   // print_r($courses);        
?>

<!-- ProBar stuff start -->
    <link href="<?=base_url();?>assets/styles/pro-bars.min.css" rel="stylesheet" type="text/css" media="all"/>

    <style>
        .main-content { width: 65%; margin-right: 3%; float: left; }
        .progress-bar-control-form { width: 100%; float: left; }
        .progress-bar-control-form table { width: 50%; float: left; }
        .right-sidebar { width: 30%; float: left; }
        .pro-bar { text-align: center; }
        .pro-bar-percentage { color: #FFFFFF; line-height: 15px; display: none; cursor: crosshair; }
        .pro-bar-percentage.visible { display: block; }
    </style>

	<script>
	$(document).ready(function(){
		// to get full course progress
		// $track -> getProgress()

		// to get videoplayback progress (100% means 60 progress points)
		//var course_progress = <?=($track -> getProgress() * 60 / 100);?>;
		var course_progress = <?=$track ->getProgress();?>;
        jQuery('#large_pro_bar').animate({width: course_progress+ '%'});
        jQuery('#large_pro_bar_percent').html(course_progress.toFixed(2) + '%');

		});
	</script>

<!-- ProBar stuff end -->

<section class="container">
	<section class="content-lg">
		<section id="course-progress-left">
			<h2><?=$track -> track_title;?></h2>
			<section class="clear"></section>
			<h5><?=$track -> tiny_intro;?></h5>
			<section class="clear"></section>
			<h4>Total Points: <?=$track -> track_points;?></h4>
		</section>

		<section id="course-progress-right">
			<h4>Track Rating: <?=$track -> getOverAllRating();?></h4>
			<section class="clear"></section>
			<h4>No. of Courses: <?=count($courses);?></h4>
			<section class="clear"></section>
			<h4>Difficulty: <?=$track -> difficulty_level;?></h4>
		</section>		
		
		<section class="clear"></section>

        <section class="progress-bar">

        <?php $track_progress=number_format($track ->getProgress());?>
		<!-- Track Progress -->
			<div class="pro-bar-container color-nephriti bm-remove" style="margin:10px !important; width: 1180px !important;">
	            <div id="small_pro_bar" class="pro-bar color-emerald" data-pro-bar-percent="<?=$track_progress;?>" data-pro-bar-delay="500">
		            <span class="pro-bar-percentage" id="small_pro_bar_percent"><?=$track_progress?> %</span>
		            <div class="pro-bar-candy candy-ltr"></div>
		       	</div>
	    	</div>

        </section>
		<section class="course-progress">

		 <?php
                            if($track ->isUserEnrolled())
                            {?>

								<button id="resume_track" type="button">Resume Track</button>
								<button id="leave_track" type="button">Leave Track</button>
                                <script>
                                    $(document).ready(function(){
                                        $('#resume_track').click(function(){
                                            window.location = '<?=base_url('index.php/tracks/resume/' . $track -> track_id);?>';
                                        });
                                    });
                                    </script>
                           <?php }
                            else
                            {
                             ?>
                    
                                <button id="register_button" type="button">Enrol Me!</button>
                                <script>
                                    $(document).ready(function(){
                                        $('#register_button').click(function(){
                                            window.location = '<?=base_url('index.php/tracks/enroll/' . $track -> track_id);?>';
                                        });
                                    });
                                    </script>
                           <?php }
                    ?>
			
		
		</section>
	</section>
	<section class="content-lg">
		<section id="course-col-track">
				  <?php
                    $i =0;
                        foreach($courses as $course){
                    ?>
			<section class="course-number-col <?php if($course -> isCourseFinishedByUser()) echo "course-number-col-completed" ?>">
				<h2><?=$i+1;?></h2>
			</section>
			<section class="course-track-border <?php if($course -> isCourseFinishedByUser()) echo "course-track-border-completed" ?>">
			</section>
			<section class="course-col <?php if($course -> isCourseFinishedByUser()) echo "course-col-completed" ?> ">
				<h5 class="html"><?php
                                    if($course -> isUserEnrolled())
                                    {
                                        echo count($course -> getFinishedLecture());
                                    }
                                    else echo "0";
                                
                                ?>/<?=count($course -> getLectures());?></h5>
				<h4 class="level"><?=$course -> difficulty_level;?></h4>
				<section class="clear"></section>
				<h4 class="course-name"><?=$course -> tiny_intro;?></h4>
				<section class="clear"></section>
				<p class="points"><?=$course -> points;?> Points</p>
				<h4 class="rating">Rating: <?=$course -> getOverAllRating();?></h4>
				<section class="clear"></section>
				<section class="progress-bar-mini">
				<?php $single_course_progress=$course -> getCourseProgressPercent();?>
					<div class="pro-bar-container color-nephriti bm-remove" style="margin:0px auto !important; width: 90% !important;">
		          		<div id="small_pro_bar" class="pro-bar color-emerald" data-pro-bar-percent="<?=$single_course_progress;?>" data-pro-bar-delay="500">
			          	  <span class="pro-bar-percentage" id="small_pro_bar_percent"><?=$single_course_progress?> %</span>
			            <div class="pro-bar-candy candy-ltr"></div>
		       		</div>
	    	</div>
				</section>
			</section>

			<section class="clear"></section>

			<?php $i++; } ?>

			
		</section>
	</section>

</section>

<section class="clear"></section>

   	<!-- More ProBar scripts -->
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>assets/js/appear.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/js/pro-bars.min.js" type="text/javascript"></script>

<script>
    jQuery(function() {

        jQuery('.pro-bar').hover(function() {
            jQuery(this).find('.pro-bar-percentage').toggleClass('visible');
        });

    });
    function calculateCourseProgress() {
        var calculated_percentage = (jQuery('#videos_viewed').val() / jQuery('#total_videos').val()) * 100;
        jQuery('#small_pro_bar').animate({width: calculated_percentage + '%'});
        jQuery('#small_pro_bar_percent').html(calculated_percentage.toFixed(2) + '%');
    }
    function showTrackProgress() {
        var course_progress = parseFloat(jQuery('#course_progress').val());
        jQuery('#large_pro_bar').animate({width: course_progress+ '%'});
        jQuery('#large_pro_bar_percent').html(course_progress.toFixed(2) + '%');
    }
</script>