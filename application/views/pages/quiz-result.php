<?php
$course = new course();
$course -> load($course_id);
$quiz = new quiz_model();
$quiz = $quiz ->getWithConditionLimit1(array('course_id' => $course_id));

?>
<section class="container">

	<section class="content-md">
		<section id="main-quiz-result">
                    <?php
                        if($course ->getCorrectAnswers() >= 6)
                        {
                    ?>
			<h2 id="pass">PASS</h2>
                        
                        <?php 
                        }
                        else
                        {
                        
                        ?>
			<h2 id="fail">FAIL</h2>
                        <?php } ?>
                        <p>
				<section class="col-left">
					<label>Quiz:</label>
				</section>
				<section class="col-right">
					<label><strong><?=$quiz->quiz_title;?></strong></label>
				</section>
			</p>
			<section class="clear"></section>
			<p>
				<section class="col-left">
					<label>Total Questions:</label>
				</section>
				<section class="col-right">
					<label><strong><?=$this -> config -> item('max_quiz_questions');?></strong></label>
				</section>
			</p>
			<section class="clear"></section>
			<p>
				<section class="col-left">
					<label>Correct Answers:</label>
				</section>
				<section class="col-right">
					<label><strong><?=$course ->getCorrectAnswers();?> (<?= $course ->getCorrectAnswers() * 10 ;?>%)</strong></label>
				</section>
			</p>
			<section class="clear"></section>
			<p>
				<section class="col-left">
					<label>Wrong Answers:</label>
				</section>
				<section class="col-right">
					<label><strong><?=$this -> config -> item('max_quiz_questions') - $course ->getCorrectAnswers();?> (<?= ( $this -> config -> item('max_quiz_questions') - $course ->getCorrectAnswers() ) * (100 / $this -> config -> item('max_quiz_questions')) ;?>%)</strong></label>

				</section>
			</p>
			<section class="clear"></section>
			<p>
				<section class="col-left">
					<label>Total Points:</label>
				</section>
				<section class="col-right">
					<label><strong><?=$course -> points;?></strong></label>
				</section>
			</p>
			<section class="clear"></section>
			<p>
				<section class="col-left">
					<label>Points Earned:</label>
				</section>
				<section class="col-right">
					<label><strong>
                                        <?=$course->getQuizEarnedPoints();?></strong></label>
				</section>
			</p>
			<section class="clear"></section>
			<p>
				<button type="submit"><a href='<?=base_url('index.php/courses/view/' . $course_id);?>'> Return </a> </button>
			</p>
		</section>
	</section>

<section class="clear"></section>