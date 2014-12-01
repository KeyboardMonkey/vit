   <section class="breadcrumb">
        <h2><a href="<?=base_url();?>index.php/home">HOME</a> / RECOMMENDATIONS</h2>
    </section>

<section class="container">
	<section class="content-md">
		<section class="content-pref-wizard">

                <?php    
                $courses  = new course();

                /** @var user_interest_categories $userInterestInCourse */
                $userInterestInCourse = $this -> user_interest_categories -> getWithCondition(
                    array(
                        'user_id' => $this -> session -> userdata('user_id')

                    )
                );
                $userInterestLevel = new user_interest_level();
                $userInterestLevel = $userInterestLevel -> getWithConditionAndOrder(
                    array('user_id' => $this -> session -> userdata('user_id')),
                    'level desc');
               // print_r($userInterestInCourse);die();
                if(count($userInterestInCourse) < 5)
                {
                    echo "<h2> Please specify 5 of your interests to get automatic recommendations </h2>";
                    echo "<p> Click <a href='" . base_url('index.php/preference/set_preference'). "'> here </a> to set preferences</p> ";
                }else{
                    ?>
            <h2>Recommended For You<br /><small>Here are some courses we think you might watch, based on your interests.</small></h2>
            <section class="recommended-courses">
                <?php


                ?>
                    <?php
                    $recommendations  = $courses ->getRecommendations();
                    foreach($userInterestLevel as $level)
                    {
                        $cat = new course_cat();
                        $cat->load($level->cat_id);
                        //echo "ID: {$level->cat_id} Title: {$cat->category} Level: {$level->level}<br />";
                        $recom = $recommendations[$level -> cat_id];
                      //  print_r($recom);
                        //echo "<br />";
                    }
                   /* foreach($recommendations as $categoryId => $recomendationCategory)
                    {
                        $cat = new course_cat();
                        $cat -> load($categoryId);
                        echo "<br /> Category: {$cat->category} <br />";
                        $found = FALSE;
                        foreach($userInterestInCourse as $interest)
                        {
                            if($interest -> cat_id == $categoryId)
                            {
                                $found = TRUE;
                                break;
                            }
                        }
                        if(!$found)
                        {
                         unset($recommendations[$categoryId]);
                        }
                        //print_r($recomendationCategory);

                    }*/
                    //die();
                    foreach($userInterestLevel as $level)
                    {
                        $recomendationCategory = $recommendations[$level -> cat_id];
                        $category = new course_cat();
                        #$category -> load($categoryId);
                        $category -> load($level -> cat_id);
                        foreach($recomendationCategory as  $key => $recomendedCourse)
                        {
                            if($recomendedCourse['points']==0)
                            {
                                unset($recomendationCategory[$key]);
                            }
                        }
                    }
                    foreach($userInterestLevel as $level)
                    #foreach($recommendations as $categoryId => $recomendationCategory)
                    {
                        $recomendationCategory = $recommendations[$level -> cat_id];
                        $category = new course_cat();
                        #$category -> load($categoryId);
                        $category -> load($level -> cat_id);

                        if(count($recomendationCategory)==0)
                        {
                            echo '<h4 style="margin:10px;">No course added in this category yet.</h4>';
                            ?>
                            <section class="other">
                                <h3><?=$category->category;?></h3>
                            </section>
                            <section class="clear"></section>
                            <?php
                            continue;
                        }
                        ?>
                        <h3><?=$category->category;?></h3>
                        <?php
                        $added = 0;
                        foreach($recomendationCategory as  $recomendedCourse)
                        {
                          //  print_r($recomendationCategory);
                            //if($recomendedCourse['points']==0) continue;
                            if($added >= 3) break;
                            $added ++;

                            $course = new course();
                            $course -> load($recomendedCourse['course_id']);
                            ?>
                            <section class="course">
                                <a href="<?=base_url();?>index.php/courses/view/<?=$course->course_id;?>"><?=$course->full_name;?></a>
                                <?php
                                $courseEnrolments = new course_enrollment();
                                $courseEnrolments = $courseEnrolments ->getWithCondition(array('course_id' => $course -> course_id));
                                ?>
                                <h6>Course Taken by <?=count($courseEnrolments) . ((count($courseEnrolments)==1) ? " User" : " Users");?> </h6>
                                <p class="points">Points: <?=$recomendedCourse['points'];?></p>
                               <!--  <section class="rating">
                                    <p>Rating: -----</p>
                                </section> -->
                            </section>
                        <?php
                        }?>
                        <section class="clear"></section>
                    <?php
                    }
                }

					?>
			</section>
		</section>
	</section>
</section>
<section class="clear"></section>