<section class="container">
	<section class="content-md">
		<section class="content-pref-wizard">
			<h2>Recommended For You<br /><small>Here are some courses we think you might watch, based on your interests.</small></h2>
	                    
			<section class="recommended-courses">
	                    <?php
	                        
	                        $courses  = new course();
	                        $recommendations  = $courses ->getRecommendations();
	                       // print_r($recommendations);
	                        foreach($recommendations as $categoryId => $recomendationCategory)
	                        {
	                             $category = new course_cat();
	                            $category -> load($categoryId);
	                            if(count($recomendationCategory)==0)
	                            {
	                             ?>
	                    <section class="course">
	                         <h3><?=$category->category;?></h3>
	                        NO COURSE IN THIS CATEGORY 
	                    </section>
	                    <section class="clear"></section>
	                    <?php
	                             continue;   
	                            }
	                           
	                         ?>
	                    <h3><?=$category->category;?></h3>
	                    <?php
	                        foreach($recomendationCategory as  $recomendedCourse)
	                        {
	                            if($recomendedCourse['points']==0) continue;
	                            $course = new course();
	                            $course -> load($recomendedCourse['course_id']);
	                         ?>
	                         
				<section class="course">
					<a href="<?=base_url();?>index.php/courses/view/<?=$course->course_id;?>"><img src="<?=base_url();?>assets/graphics/course-thumbnail.png" width="150px" height="94px" alt="thumbnail" /><br /><?=$course->full_name;?></a>
					<?php
	                                    $courseEnrolments = new course_enrollment();
	                                    $courseEnrolments = $courseEnrolments ->getWithCondition(array('course_id' => $course -> course_id));
	                                ?>
	                                <h6>Course Taken by <?=count($courseEnrolments) . ((count($courseEnrolments)==1) ? " User" : " Users");?> </h6>
	                                <p>Points: <?=$recomendedCourse['points'];?></p>
				</section>
	                    <?php
	                        }?>
	                         
	                         
	                        <section class="clear"></section>
	                        
	                    <?php
	                        }
	                    ?>
			</section>
		</section>
	</section>
</section>
<section class="clear"></section>