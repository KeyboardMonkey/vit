
	<section class="container">

	<nav class="side-navs">
		<ul>
		<li class="courses"><a href="<?=base_url();?>index.php/library">All Courses</a></li>
	
	<?php
	                $cats = $this->course_cat->get();
                    $tempu = new course();
					
                    foreach($cats as $cat){
                   	$lulu = $tempu -> getCategoryCourseCount($cat->id);
                ?>
				
			<li><span class="total-courses"><?php if($lulu>0)echo "$lulu";else echo '0';?></span><a href="<?=base_url();?>index.php/library/index/category/<?=$cat->id;?>" class="<?=$cat->color_tag;?>"><?=$cat->category;?></a></li>
	
	 		<?php }?>
		</ul>
	</nav>
	
	<section class="content-md">
		<section class="library-intro">
			<h4>Welcome to Course Library</h4>
			<p>This is the complete catalogue of the content we offer. Browse by topic, type or difficulty before starting a track.</p>
		</section>
		<section class="library-intro">
			<h4>How to use our Course Library?</h4>
			<p>Our library is best for exploring content in a self-guided manner. Want us to guide you through learning new skills. Try out <a href="">Tracks</a>.</p>
		</section>
		<section class="line-border"></section>
		<nav class="default">
			<a href="">Newest</a>
			<a href="">Oldest</a>
			<a href="">Top Rated</a>
			<a href="">Alphabetical</a>
			<a href="">Difficulty</a>
		</nav>
	</section>

	<section class="content-md">
	<section class="split-library">
            <?php
                $filter = array();
                $filter['status' ] =  'yes';
                if(isset($filter_type) && isset($filter_value) && $filter_type != NULL && $filter_value != NULL)
                {
                    $filter[$filter_type] =  $filter_value;
                }
                $courses = $this -> course -> getWithCondition($filter);
                $class = "half-two";
                foreach($courses as $course)
                {
                    if($class == "half-two") $class = "half-one"; else $class = "half-two";
            ?>
                <section class="<?=$class?>">
			<section class="course-info">
				<h4 class="course-name"><?=$course->full_name;?></h4>
					<section class="clear"></section>
				<p class="points"><?=$course->points;?> Points</p>
					<section class="clear"></section>
				<section class="rating">
					<p>Rating: <?=$course->getOverAllRating();?> (<?=$course->numberOfRatings();?>)</p>
				</section>
					<section class="clear"></section>
			</section>
			<section class="clear"></section>
			<section class="color-tag">
					<a href="<?=base_url();?>index.php/library/index/category/<?=$course->getCategory()->id;?>" class="<?=$course->getCategory()->color_tag;?>"><?=$course->getCategoryTitle();?></a>
			</section>
			<section class="learn-now">
				<a href="<?=base_url();?>index.php/courses/view/<?=$course->course_id;?>" class="learn-now">Learn Now</a>
			</section>
		</section>
            <?php 
                }
            ?>
		
		<section class="clear"></section>
	</section>
	</section>
	
	</section>

	<section class="clear"></section>