<section class="container">
	<section class="content-lg">
		<ul class="suggest-me-track">
			<li><span class="suggest-me-track"><img src="<?=base_url();?>assets/graphics/suggest-track.png" width="75px" height="75px" /></span><a href="<?=base_url();?>index.php/tracks/suggest_track">SUGGEST ME A TRACK!</a></li>
		</ul>
		<?php
		$allTracks = new track();
		$allTracks = $allTracks -> getWithCondition(array('status' => 'yes'));

		foreach ($allTracks as $track) 
		{
			?>
			
		<section class="half-one">
			<section class="course-info">
				<h2 class="course-name"><?=$track -> track_title;?></h2>
					<small><?=$track->tiny_intro;?></small>
					<br /><br />
					<p class="points">Points: <?=$track->track_points;?></p>
				<ul>
					<li><?=$track->track_description;?></li>
				</ul>
<!-- 				<section class="rating"><p>Rating: <?=$track->getOverAllRating();?> (<?=$track->numberOfRatings();?>)</p></section> -->
			</section>
			<section class="inline-buttons">
				<a href="">Start Track</a>
				<a href="">Explore</a>
			</section>
		</section>
		<?php

	}

	?>
</section>
</section>

<section class="clear"></section>