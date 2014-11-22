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
				<img src="<?=base_url() . $user -> avatar;?>" width="120px" height="120px" />
			</section>
			<section class="user-info">
				<ul>
					<li>Last Seen: # <span style="font-weight:bold;"><?=date("D, d M Y",strtotime($user->last_login));?></span></li>
					<li>Member Since: <span style="font-weight:bold;"><?=date("D, d M Y",strtotime($user->register_date));?></span></li>
				</ul>
				<h1><?=$user -> first_name . " " . $user->last_name;?><small id="user-type"><?=$user -> type;?></small></h1>
				<h5><?=$user -> city;?>, <?=$user -> country;?></h5>
				<p><?=$user -> intro;?></p>
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
						<li><?=$user -> first_name;?></li>
						<li><?=$user -> last_name;?></li>
						<li><?=$user -> email;?></li>
						<li><a href="<?=$user -> fb_url;?>"><?=$user -> fb_url;?></a></li>
						<li><a href="<?=$user -> twitter_url;?>"><?=$user -> twitter_url;?></a></li>
						<li><a href="<?=$user -> linkedin_url;?>"><?=$user -> linkedin_url;?></a></li>
						<li><a href="<?=$user -> gplus_url;?>"><?=$user -> gplus_url;?></a></li>
					</ul>
				</section>
			</section>
			<section class="clear"></section>
		</section>
		
	</section>
	
	<section class="clear"></section>
	
	