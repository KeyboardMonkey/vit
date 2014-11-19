<?php
  $leaders = array(new user(), new user(), new user());
  $cat = new course_cat();                 
  if($filter_type == 'category') {
    $cat -> load($filter_value);
    $leaders = $this -> user -> getLeaders($filter_value);
    // $leaders = $cat ->getLeaders();
    //print_r($cat ->getLeaders());
  }
  else {
    $leaders = $this -> user -> getLeaders();
  }
?>
<section class="content-md">
  <section class="top-students">
  	<h3>Top 3 Students</h3>
  		<section id="trophies">
      <section class="first-trophy">
  			<section class="content">
  				<img src="http://localhost/vit/assets/graphics/trophy1.svg" width="100px" height="111px">
          <section class="clear"></section>
          <section class="winner-info">
    				<a href=""><?=$leaders[0] -> username;?></a>
    				<p>
              <?php
                if(isset($filter_type)) {
                  echo $cat->getPointsEarnedInCategory($leaders[0] -> user_id) ;
                }
                else {
                  echo $leaders[0] -> getAllPoints($leaders[0] -> user_id);
                }
              ?> Points
            </p>
  			 </section>
        </section>
  		</section>
			<section class="second-trophy">
				<section class="content">
					<img src="http://localhost/vit/assets/graphics/trophy2.svg" width="100px" height="111px">
					<section class="clear"></section>
          <section class="winner-info">
            <a href=""><?=$leaders[1] -> username;?></a>
  					<p>
              <?php
                if(isset($filter_type)) {
                  echo $cat->getPointsEarnedInCategory($leaders[1] -> user_id) ;
                }
                else {
                  echo $leaders[1] -> getAllPoints($leaders[1] -> user_id);
                }
               ?> Points
            </p>
				  </section>
        </section>
			</section>
			<section class="third-trophy">
				<section class="content">
					<img src="http://localhost/vit/assets/graphics/trophy3.svg" width="100px" height="111px">
					<section class="clear"></section>
          <section class="winner-info">
            <a href=""><?=$leaders[2] -> username;?></a>
  					<p>
              <?php
                if(isset($filter_type)) {
                  echo $cat->getPointsEarnedInCategory($leaders[2] -> user_id) ;
                }
                else {
                  echo $leaders[2] -> getAllPoints($leaders[2] -> user_id);
                }
              ?> Points
            </p>
				  </section>
        </section>
			</section>
    </section>
  </section>
</section>