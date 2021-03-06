<?php 
        $track = new track();
        $track -> load($track_id);
        $courses = $track ->getCourses();
       // print_r($courses);
        
?>

<section class="container">
	<section class="content-lg">
		<section id="course-progress-left">
			<h2><?=$track -> track_title;?></h2>
			<section class="clear"></section>
			<h5><?=$track -> tiny_intro;?></h5>
			<section class="clear"></section>
			<h4>Total Points: <?=$track -> getPoints();?>
                <?php

                $points = $track -> getPoints();

                if($track ->isUserEnrolled())
                {
                    echo " / Earned " . $track -> getPointsEarned();

                }
                ?>
            </h4>
		</section>

		<section id="course-progress-right">
			<h4>Track Rating: <?=$track -> getOverAllRating();?></h4>
			<section class="clear"></section>
			<h4>No. of Courses: <?=count($courses);?></h4>
			<section class="clear"></section>
			<h4>Difficulty: <?=$track -> difficulty_level;?></h4>
		</section>		
		<section class="clear"></section>
		<section id="track-description">
			<h3>Description</h3>
            <p><?=$track -> track_description;?></p>
            <?php

            if(strlen($track -> additional_file_path) > 2 && strlen($track -> additional_file_title) > 2)
            {
                ?>
            <h3>Additional Information</h3>
            <p><a href="<?=base_url($track -> additional_file_path);?>"><?=$track->additional_file_title;?></a></p>

                <?php
            }
                  
            ?>

                        
		</section>
		<section class="course-progress">
                    <?php
                            if($track ->isUserEnrolled())
                            {?>
                                <button id="start_track"  type="button">Resume Track</button>
                                <script>
                                    $(document).ready(function(){
                                        $('#start_track').click(function(){
                                            window.location = '<?=base_url('index.php/tracks/resume/' . $track -> track_id);?>';
                                        });
                                    });
                                    </script>
                           <?php }
                            else
                            {
                             ?>
                    
                                <button id="register_button" type="button">Register Track</button>
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
			<section class="course-number-col course-number-col-completed">
				<h2><?=$i+1;?></h2>
			</section>
			<section class="course-track-border course-track-border-completed">
			</section>
			<section class="course-col course-col-completed">
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
			</section>

			<section class="clear"></section>

                        <?php $i++; } ?>
		</section>
	</section>

</section>

<section class="clear"></section>