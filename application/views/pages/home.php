<?php
		$user = new user();
		$user ->load($this -> session -> userdata('user_id'));
	/*	print_r($user);
		die();*/
		$myCourse = new course();
        $cats = $this -> course_cat -> get();
        $total = 0;
         foreach($cats as $cat)
         {
             $total += $cat->getPointsEarnedInCategory();
         }
?>
<!-- ProBar stuff start -->
    <link href="<?=base_url();?>assets/styles/pro-bars.min.css" rel="stylesheet" type="text/css" media="all"/>

    <style>
        .main-content {
            width: 65%;
            margin-right: 3%;
            float: left;
        }

        .progress-bar-control-form {
            width: 100%;
            float: left;
        }

        .progress-bar-control-form table {
            width: 50%;
            float: left;
        }

        .right-sidebar {
            width: 30%;
            float: left;
        }

        .pro-bar {
            text-align: center;
        }
        .pro-bar-percentage {
            color: #FFFFFF;
            line-height: 15px;
            display: none;
            cursor: default;
        }
        .pro-bar-percentage.visible {
            display: block;
        }

    </style>

    		<script>
			$(document).ready(function(){
				// to get full course progress
				// $myCourse -> getCourseProgressPercent()

				// to get videoplayback progress (100% means 60 progress points)
				//var course_progress = <?=($myCourse -> getLectureProgress() * 60 / 100);?>;
				var course_progress = <?=$myCourse -> getCourseProgressPercent();?>;
		        jQuery('#large_pro_bar').animate({width: course_progress+ '%'});
		        jQuery('#large_pro_bar_percent').html(course_progress.toFixed(2) + '%');

				});
			</script>

<!-- ProBar stuff end -->

<section class="container">
	<section class="content-md">
	<h5 style="margin:10px 0px 10px 10px; display:inline;">Welcome back <h4 style="margin:10px 0px 10px px; display:inline;"><a href="<?=base_url();?>index.php/profile/index/<?=$this->session->userdata('user_id')?>"><?=$user->first_name." ".$user->last_name;?>!</a></h4></h5>
	<h5 style="margin:10px;">You're about to learn amazing new things today :)</h5>
	</section>
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
<!-- 			<?=$progress = number_format($myTrack->getProgress());?>% -->
<!-- Course Progress -->
				<div class="pro-bar-container color-nephriti bm-remove" style="margin:0px !important;">
		            <div id="small_pro_bar" class="pro-bar color-emerald" data-pro-bar-percent="<?=$myTrack->getProgress();?>" data-pro-bar-delay="500">
			            <span class="pro-bar-percentage" id="small_pro_bar_percent"><?=$myTrack->getProgress();?>%</span>
			            <div class="pro-bar-candy candy-ltr"></div>
			       	</div>
	        	</div>

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
		

				<!-- Course Progress -->
				<div class="pro-bar-container color-nephriti bm-remove" style="margin-top:10px !important;">
		            <div id="small_pro_bar" class="pro-bar color-emerald" data-pro-bar-percent="<?=$myCourse -> getCourseProgressPercent();?>" data-pro-bar-delay="500">
			            <span class="pro-bar-percentage" id="small_pro_bar_percent"><?=$myCourse -> getCourseProgressPercent();?>%</span>
			            <div class="pro-bar-candy candy-ltr"></div>
			       	</div>
	        	</div>
	       
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
				<li><a href="">Programming Fundamentals</a></li>
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