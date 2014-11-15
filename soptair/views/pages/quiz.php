<?php
	
	$course = new course();
	$course -> load($course_id);
	$quiz = new quiz_model();
	$quiz = $quiz -> getWithConditionLimit1(array('course_id' => $course_id));
	$questions = $this -> quiz_question -> getWithCondition(array('quiz_id' => $quiz -> quiz_id));
	//print_r($questions);
	$question = new quiz_question();
	$i = 0;
	foreach($questions as $_question)
	{
		if($i==$start_question)
		{
			$question = $_question;
			break;
		}
		$i ++;
	}
?>

<section class="container">

	<section class="widgets">		
		<section class="clear"></section>

		<section class="widget-quiz-remarks">
			<ul class="quiz-remarks">
				<li><a href="">1<br />Correct</a></li>
				<li><a href="">0<br />Incorrect</a></li>
			</ul>
			<p class="info">You need minimum 4 correct answers to pass the quiz.</p>
		</section>
	</section>

	<section class="content-md">
		<h5 class="quiz">Quiz: Question 1/5</h5>
		<h3 class="quiz-question"><?=$question->question_text;?></h3>
		<form class="ac-custom ac-radio ac-circle" autocomplete="off">
			<ul>
				<li><input id="q_1" name="q_1" value="option_1" type="radio"><label for="r5"><?=$question->option_1;?> </label></li>
				<li><input id="q_2" name="q_1" value="option_2"  type="radio"><label for="r6"><?=$question->option_2;?></label></li>
				<li><input id="q_3" name="q_1" value="option_3"  type="radio"><label for="r7"><?=$question->option_3;?></label></li>
				<li><input id="q_4" name="q_1" value="option_4"  type="radio"><label for="r8"><?=$question->option_4;?></label></li>
			</ul>
		</form>
		
			<input type="submit" id="submit_question" name="submit" value="Next Question" />
		
		<script>
					$(document).ready(function(){
						$('#submit_question').click(function(){
							var answer = ($("input[name='q_1']:checked").val());
							var question = <?=$question-> id;?>;
							
						});

					});
		</script>
	</section>

</section>

<section class="clear"></section>
<script src="<?=base_url()?>assets/js/svgcheckbx.js"></script>