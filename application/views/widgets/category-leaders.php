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

    
      <section class="second-trophy">
        <section class="content">
          <img src="<?=base_url();?>assets/graphics/trophy2.svg" width="100px" height="111px">
          <section id="block-b"></section>
          <section id="block-c">
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
          <section id="block-d"><a href=<?=base_url('index.php/profile/index/' . $leaders[1] -> user_id) ;?>><?=$leaders[1] ->first_name." ".$leaders[1]->last_name;?></a></section>
        </section>
      </section>
      

      <section class="first-trophy">
        <section class="content">
          <img src="<?=base_url();?>assets/graphics/trophy1.svg" width="100px" height="111px">
          <section id="block-a"></section>
          <section id="block-b"></section>
          <section id="block-c">
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
          <section id="block-d"><a href=<?=base_url('index.php/profile/index/' . $leaders[0] -> user_id) ;?>><?=$leaders[0] ->first_name." ".$leaders[0]->last_name;?></a></section>
        </section>
      </section>


      <section class="third-trophy">
        <section class="content">
          <img src="<?=base_url();?>assets/graphics/trophy3.svg" width="100px" height="111px">
          <section id="block-c">
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
          <section id="block-d"><a href=<?=base_url('index.php/profile/index/' . $leaders[2] -> user_id) ;?>><?=$leaders[2]->first_name." ".$leaders[2]->last_name;?></a></section>
        </section>
      </section>


    </section>
  </section>
</section>