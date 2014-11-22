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
				<ul>
					<li>Last Login: 21/Nov/14</li>
					<li>Register Date: 10/Nov/14</li>
				</ul>
				<h1><?=$user -> first_name . " " . $user->last_name;?><small id="user-type">Admin</small></h1>
				<h5>Rawalpindi, Pakistan</h5>
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
				<h3>Information</h3>
			</section>
			<section class="line-border"></section>
			<section class="cols-categories">
				<section class="col1">
					<ul class="profile">
						<li><strong>First Name</strong></li>
						<li><strong>Last Name</strong></li>
						<li><strong>Email ID</strong></li>
						<li><strong>Facebook Profile URL</strong></li>
						<li><strong>Twitter Profile URL</strong></li>
						<li><strong>Linkedin Profile URL</strong></li>
						<li><strong>Google+ Profile URL</strong></li>
					</ul>
				</section>
				<section class="col2">
					<ul class="profile">
						<li>Abdul</li>
						<li>Rehman</li>
						<li>ar.malik@vitorials.com</li>
						<li><a href="www.facebook.com/">www.facebook.com/</a></li>
						<li><a href="www.twitter.com/">www.twitter.com/</a></li>
						<li><a href="www.linkedin.com/">www.linkedin.com/</a></li>
						<li><a href="www.gmail.com/">www.gmail.com/</a></li>
					</ul>
				</section>
			</section>
			<section class="clear"></section>
		</section>
		
	</section>
	
	<section class="clear"></section>
	
	