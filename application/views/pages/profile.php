<?php
    $user = new user();
    $user ->load($user_id);
     $cats = $this -> course_cat -> get();
        $total = 0;
         foreach($cats as $cat)
         {
             $total += $cat->getPointsEarnedInCategory($user_id);
         }
?>

	<section class="container">
	

		<section class="content-md">
			<section class="profile-pic">
				<img src="<?=base_url();?>assets/graphics/profile-pic.jpg" width="120px" height="120px" />
			</section>
			<section class="user-info">
				<h1><?=$user -> first_name . " " . $user->last_name;?></h1>
				<h5>Rawalpindi, Pakistan</h5> <br />
				<p>I am a Software Engineering graduate student with love for Web Development. I love to play cricket and I am a fitness freak.</p>
			</section>
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
			
                                    
					<li class="<?= $cat -> color_tag;?>"><strong><?=$cat->getPointsEarnedInCategory($user_id);?></strong><br/><?=$cat -> category ;?></li>
					
				
                  
                              
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
			<section class="title">
				<h3>Skills &amp; Experience</h3>
			</section>
			<section class="line-border"></section>
			<section class="cols-categories">
				<section class="col1">
					<ul class="profile">
						<li><strong>Company Name</strong></li>
						<li><strong>Job Title</strong></li>
						<li><strong>Interests</strong></li>
						<li><strong>Looking for Job</strong></li>
					</ul>
				</section>
				<section class="col2">
					<ul class="profile">
						<li>Soft Tech.</li>
						<li>Web Developer</li>
						<li>Web Designing, Web Development</li>
						<li>Yes</li>
					</ul>
				</section>
			</section>
			<section class="clear"></section>
		</section>
		
	</section>
	
	<section class="clear"></section>
	
	