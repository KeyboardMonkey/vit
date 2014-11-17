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


	<?php 
//	$lecture = $lecture[$current_lecture];
//	print_r($lecture);
	$lecture_id = 0;
	$i = 0;
	$lecture = new lecture();
       // print_r($lectures);
	foreach ($lectures as $key => $individualLecture) {
		if($i==$current_lecture)  {

			$lecture = $individualLecture;
			$lecture_id = $lecture -> lect_id;
			break;
		}
		$i++;
	}
	//print_r($lecture);
        
	$videoUrl = $lecture->vid_path;
	
	

	?>

	<section class="container">
		<section class="widgets">
			<section class="widget-video-transition">
				<h6>Video <?=$current_lecture+1?>/<?=count($lectures);?></h6>
				<h4><?=$lecture->vid_title;?></h4>
				<p> 
				<?php
						if( $course -> getCourseProgressPercent() == 100)
						{
							echo "You've Finished all lectures. Feel Free to watch again.";
						}// else echo $course -> getCourseProgressPercent();
				?>
				</p>
				<ul>
					<?php
					if($current_lecture > 0)
					{?>
					<li class="previous"><a href="<?=base_url('index.php/courses/course_playback/' . $course_id.'/'.($current_lecture-1));?>">Previous</a></li>
					<?php
					}
					?>

					<?php
					if($current_lecture < count($lectures)-1)
					{?>
					<li class="previous"><a href="<?=base_url('index.php/courses/course_playback/' . $course_id.'/'.($current_lecture+1));?>">Next</a></li>
					<?php
					}
					?>
				</ul>
				<p class="buttons">
					<button id="#" type="button">Previous</button>
					<button id="#" type="button">Next</button>
				</p>
			</section>
			
			<section class="clear"></section>

				<script>
			$(document).ready(function(){
				// to get full course progress
				// $course -> getCourseProgressPercent()

				// to get videoplayback progress (100% means 60 progress points)
				//var track_progress = <?=($course -> getLectureProgress() * 60 / 100);?>;
				var track_progress = <?=$course -> getCourseProgressPercent();?>;
		        jQuery('#large_pro_bar').animate({width: track_progress+ '%'});
		        jQuery('#large_pro_bar_percent').html(track_progress.toFixed(2) + '%');

				});
				

			</script>

			<section class="widget-course-progress">
				<h4>Course Progress</h4>
					<div class="pro-bar-container color-nephriti bm-remove">
		            <div id="small_pro_bar" class="pro-bar color-emerald" data-pro-bar-percent="<?=$course -> getCourseProgressPercent();?>" data-pro-bar-delay="500">
		                <span class="pro-bar-percentage" id="small_pro_bar_percent"><?=$course -> getCourseProgressPercent();?>%</span>
		                <div class="pro-bar-candy candy-ltr"></div>
		            </div>
		        	</div>
			</section>

			<section class="widget-take-quiz">
				<h4>Take Quiz</h4>
				<ul>
                                    
					<li><span class="take-quiz"><img src="<?=base_url();?>assets/graphics/take-quiz.png" width="30px" height="30px" alt="take-quiz" /></span><a href="<?=base_url();?>index.php/quiz/index/<?=$course->course_id;?>">Take Quiz</a></li>
				</ul>
			</section>
			
			<section class="clear"></section>

			<section class="widget-course-summary">
				<h4>Write Course Summary</h4>
				<ul>
					<li><a href="<?=base_url();?>index.php/courses/view/<?=$course->course_id;?>#section-underline-2"><span class="summary"><img src="<?=base_url();?>assets/graphics/summary.png" width="20px" height="18px" alt="summary" /></span>Write Course Summary</a></li>
				</ul>
			</section>

			<section class="clear"></section>
			
			<section class="widget-project-files">
				<h4>Download</h4>
				<ul>
					<li><span class="download"><img src="<?=base_url();?>assets/graphics/downloads.png" width="20px" height="18px" alt="download" /></span><a href="">Download Course Files</a></li>
				</ul>
			</section>
			
			<section class="clear"></section>
			
			<section class="widget-facebook-recommendations">
				<h4>Facebook Recommendations</h4>
				<p class="fb-feeds">"Asdsfk afd fdfdk adsfdsf dfdj dfjdjf djdj jd jdjdjdj jd jd jjjdjds swizadfdd asdadnafas."</p>
				<p class="fb-feeds">"Asdsfk afd fdfdk adsfdsf dfdj dfjdjf djdj jd jdjdjdj jd jd jjjdjds swizadfdd asdadnafas."</p>
				<p class="fb-feeds">"Asdsfk afd fdfdk adsfdsf dfdj dfjdjf djdj jd jdjdjdj jd jd jjjdjds swizadfdd asdadnafas."</p>
			</section>
		</section>
	
	
	<section class="content-md">
		<section class="widget-video-player">
			<h3 class="course-title "><?=$lecture->vid_title;?></h3>
			<video id="my_video" width="960px" height="500px" controls>
				<source src="<?=base_url().$lecture->vid_path;?>" type="video/mp4">
				Your browser does not support HTML5 video.
	    	</video>

		    <script type="application/javascript">
		        jQuery(window).blur(function() {
		            var videoTag = document.getElementById('my_video');
		            videoTag.pause();
		        });
		        $(document).ready(function()
		        {
		           
		           var video = document.getElementById('my_video');
		        	$('#my_video').bind('loadedmetadata', function() {
		        		console.log("LOADED");
					   	var vLength = parseInt(video.duration);
						var percent = <?=$lecture->getProgress();?>;
						var time = parseInt( vLength * percent)/100;
						video.currentTime = (percent < 90 ) ? time : 0;
						console.log("total: " + vLength + " current: " + time +  " (%): " + percent);
		        	});
		        		video.addEventListener("timeupdate", function () {
				  	//  Current time  
				  	var vTime = parseInt(video.currentTime);
				   	var vLength = parseInt(video.duration);
					var remaining = parseInt(( vLength - vTime ));
					
					var percent =100 -  parseInt((remaining / vLength ) * 100);
					console.log("total: " + vLength + " current: " + vTime +  " Remaining" +remaining + " (%): " + percent);
					var url = '<?=base_url('index.php/courses/set_lecture_progress/' . $lecture_id  );?>' + '/' + percent; 
					console.log(url);
					jQuery.ajax({
		            	url: url,
		                type: 'get',
		                dataType: 'text', // dataType: 'html'
		                data: '', // Example data: 'video_ki_id=' + videoId + '&user_ki_id=' + userId + '&time=' + viewedAt
		                success: function (response) {
		                	console.log(response);
		                	//alert('lecture (iD: <?=$lecture_id;?>) progress set to 100%');
		                    //window.location = '<?=base_url('index.php/courses/course_playback/'.$course_id);?>';
		                    // document.getElementById('my_video').play();
		                }
		            });
		        	});

				}, false);
		        
		        document.getElementById('my_video').onended = function(e) {
		        // alert('Yahan AJAX call ka code likhna, jo database mei entry kr dyga k video dekhli hy yh wali. Example code comment mei likha hy.')    
		            jQuery.ajax({
		            	url: '<?=base_url('index.php/courses/set_lecture_progress/' . $lecture_id . '/100' );?>',
		                type: 'get',
		                dataType: 'text', // dataType: 'html'
		                data: '', // Example data: 'video_ki_id=' + videoId + '&user_ki_id=' + userId + '&time=' + viewedAt
		                success: function (response) {
		                	//alert('lecture (iD: <?=$lecture_id;?>) progress set to 100%');
		                    window.location = '<?=base_url('index.php/courses/course_playback/'.$course_id);?>';
		                    // document.getElementById('my_video').play();
		                }
		            });
		            
		        };
		    </script>
		</section>

		<br />	<br />	<br />
		<!-- <section class="teacher-notes"> -->		
		<section class="teacher-notes">
			<h4>Teacher's Notes</h4>
			<ul>
				<li><span class="notes"><img src="<?=base_url();?>assets/graphics/teacher-notes.png" width="20px" height="20px" /></span><a href="">Introduction to Programming</a></li>
				<li><span class="notes"><img src="<?=base_url();?>assets/graphics/teacher-notes.png" width="20px" height="20px" /></span><a href="">JavaScript Foundations</a></li>
			</ul>
		</section>
	</section>

	<br />	<br />
	<section class="content-md">
		<section class="widget-facebook-commenter">
			<h3>Discussions</h3>
			<ul>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
				<li>asdfsd</li>
			</ul>
		</section>
	</section>
	<section class="clear"></section>



<!-- JavaScript -->
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>assets/js/appear.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/js/pro-bars.min.js" type="text/javascript"></script>

<script>
    jQuery(function() {
//        alert('Validations ni hein so valid input(numeric/float) dena for calculation.');

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
        var track_progress = parseFloat(jQuery('#track_progress').val());
        jQuery('#large_pro_bar').animate({width: track_progress+ '%'});
        jQuery('#large_pro_bar_percent').html(track_progress.toFixed(2) + '%');
    }
</script>