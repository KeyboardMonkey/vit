<section class="container">
	<section class="content-lg">
	<!-- 	<ul class="suggest-me-track">
			<li><span class="suggest-me-track"><img src="<?=base_url();?>assets/graphics/suggest-track.png" width="75px" height="75px" /></span><a href="<?=base_url();?>index.php/tracks/suggest_track">SUGGEST ME A TRACK!</a></li>
		</ul> -->
		<?php
		$allTracks = new track();
		$allTracks = $allTracks -> getWithCondition(array('status' => 'yes'));

		foreach ($allTracks as $track) 
		{
			?>
			
		<section id="tracks">
			<section class="half-one">
				<section class="course-info">
					<h5>Intermediate</h5>
					<p class="points">Points: <?=$track->track_points;?></p>
					<h2 class="course-name"><?=$track -> track_title;?></h2>
					<h5><?=$track->tiny_intro;?></h5>
					<p class="desc"><?=$track->track_description;?></p>
	<!-- 				<section class="rating"><p>Rating: <?=$track->getOverAllRating();?> (<?=$track->numberOfRatings();?>)</p></section> -->
				</section>
				<section class="buttons">
				<?php
				if($track ->isUserEnrolled())
                    {
                    	?>
                     <button type="button" data-resume_id="<?=$track->track_id;?>" class="default resume-track">Resume Track</button>
                <?php
                    }

                else
                    {

                ?>

					<button type="button" data-resume_id="<?=$track->track_id;?>" class="default resume-track">Start Track</button>
                <?php
                    }
                ?>
					<button data-explore_id="<?=$track->track_id;?>" type="button" class="default explore-track">Explore</button>
				</section>
			</section>
		</section>
		<?php

	}

	?>
</section>
</section>
	<script>
	$(document).ready(function(){
	    $('.explore-track').click(function(){
	    	var track_id = $(this).attr('data-explore_id');
	        window.location = '<?=base_url();?>index.php/tracks/explore/' + track_id;
	    });
	});
	</script>	

	<script>
	$(document).ready(function(){
	    $('.resume-track').click(function(){
	    	var resume_id = $(this).attr('data-resume_id');
	        window.location = '<?=base_url();?>index.php/tracks/resume/' + resume_id;
	    });
	});
	</script>
<section class="clear"></section>