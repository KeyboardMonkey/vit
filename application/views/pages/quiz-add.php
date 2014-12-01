<?=$message;?>
<?=validation_errors();?>
   <section class="breadcrumb">
        <h2><a href="<?=base_url();?>index.php/home">HOME</a> / QUIZ / ADD QUIZ</h2>
    </section>
<form class="add-course dashboard" method="post">

<?php
	if(isset ($quiz_id) && $quiz_id !=NULL)
	{
		echo "<td><input type=\"hidden\" value=\"$quiz_id\" name=\"quiz_id\"></td>";
	}
				
?>

	<table class="add-course">

		<tr>
			
			
		<?php
			if(isset ($assessment_name) && $assessment_name!=NULL)
			{
				echo "<td><lable>Assessment Name: </lable>". $assessment_name . "</td>";
				echo "<td><input type=\"hidden\" value=\"$assessment_name\" name=\"quiztitle\"></td>";
			}
			else
			{
				echo "<td><label>New Assessment</label></td>";
				echo"<td><input class=\"name\" type=\"text\" name=\"quiztitle\" placeholder=\"Quiz Title Here\" /></td>";
			}
		?>
			
		</tr>
		<tr>
			<td><label>Question</label></td>
			<td><input class="name" type="text" name="question" placeholder="Your Question Here" /></td>
		</tr>
		<tr>
			<td><label>Option 1</label></td>
			<td><input class="answer" type="text" name="option1" placeholder="" /><input type="radio" name="correct_answer" value="option1" />True</td>
		</tr>
		<tr>
			<td><label>Option 2</label></td>
			<td><input class="answer" type="text" name="option2" placeholder="" /><input type="radio" name="correct_answer" value="option2" />True</td>
		</tr>
		<tr>
			<td><label>Option 3</label></td>
			<td><input class="answer" type="text" name="option3" placeholder="" /><input type="radio" name="correct_answer" value="option3" />True</td>
		</tr>
		<tr>
			<td><label>Option 4</label></td>
			<td><input class="answer" type="text" name="option4" placeholder="" /><input type="radio" name="correct_answer" value="option4" />True</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="reset" name="reset" value="Reset" />
				<input class="submit_form" type="submit" name="submit" value="Next Question" />
				<a href="<?=base_url();?>index.php">Finish</a>
			</td>
		</tr>
	</table>
</form>