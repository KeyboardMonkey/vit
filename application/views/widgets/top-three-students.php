<?php
    
?>
<section class="content-md">
	<section class="top-students">
		<h3>Top 3 Students</h3>
		<section id="trophies">
			<section class="first-trophy">
				<section class="content">
					<img src="<?=base_url();?>assets/graphics/trophy1.svg" width="100px" height="111px" />
					<section class="clear"></section>
					<section class="winner-info">
						<a href="<?=base_url('index.php/profile/index/' . $leaders[0] -> user_id) ;?>"><?=$leaders[0]->username;?></a>
						<p><?= $leaders[0]->getAllPoints();?> Points</p>
					</section>
				</section>
			</section>
			<section class="second-trophy">
				<section class="content">
					<img src="<?=base_url();?>assets/graphics/trophy2.svg" width="100px" height="111px" />
					<section class="clear"></section>
					<section class="winner-info">
						<a href="<?=base_url('index.php/profile/index/' . $leaders[1] -> user_id) ;?>"><?=$leaders[1]->username;?></a>
						<p><?= $leaders[1]->getAllPoints();?> Points</p>
					</section>
				</section>
			</section>
			<section class="third-trophy">
				<section class="content">
					<img src="<?=base_url();?>assets/graphics/trophy3.svg" width="100px" height="111px" />
					<section class="clear"></section>
					<section class="winner-info">
						<a href="<?=base_url('index.php/profile/index/' . $leaders[2] -> user_id) ;?>"><?=$leaders[2]->username;?></a>
						<p><?= $leaders[2]->getAllPoints();?> Points</p>
					</section>
				</section>
			</section>
		</section>
	</section>
</section>