<?php
	
	
	//print_r($questions);
	
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
            <h2>Please submit quiz carefully! Re-submittion is PROHIBITED!</h2>
            <section class="clear"></section>
            <br />            <br />
            <br />

            <form class="ac-custom ac-radio ac-circle" autocomplete="off" method="post">
                <?php 
                $i = 0;
                    foreach($questions as $question){
                        ?>
		<h5 class="quiz">Quiz: Question <?=$i+1;?>/<?=count($questions);?></h5>
		<h3 class="quiz-question"><?=$question->question_text;?></h3>
		
                    
                    
			<ul>
                            
				<li><input id="q_1" name="q_<?=$question->question_id;?>" value="option_1" type="radio"><label for="r5"><?=$question->option_1;?> </label></li>
				<li><input id="q_2" name="q_<?=$question->question_id;?>" value="option_2"  type="radio"><label for="r6"><?=$question->option_2;?></label></li>
				<li><input id="q_3" name="q_<?=$question->question_id;?>" value="option_3"  type="radio"><label for="r7"><?=$question->option_3;?></label></li>
				<li><input id="q_4" name="q_<?=$question->question_id;?>" value="option_4"  type="radio"><label for="r8"><?=$question->option_4;?></label></li>
			</ul>
                   
                    <?php  $i++;} ?>
                	<input type="submit" id="submit_question" name="submit" value="Next Question" />
		</form>
		
		
		
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