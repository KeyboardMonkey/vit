<section class="container">
	<section class="content-lg">
		<?=$message;?>
		<?=validation_errors();?>
		<form class="add-course dashboard" method="post">
			<table class="add-course">
				<tr>
					<td><label>Course Full Name:</label></td>
					<td><input class="name" type="text" name="coursefullname" placeholder="Course Full Name" /></td>
				</tr>
				<tr>
					<td><label>One Line Intro:</label></td>
					<td><input class="name" type="text" name="courseshortname" placeholder="Course Short Name" /></td>
				</tr>
				<tr>
					<td><label>Description:</label></td>
					<td><textarea rows="4" cols="50" placeholder="Write Course Summary Here"></textarea></td>
				</tr>
				<tr>
					<td><label>Category:</label></td>
					<td>
						<select id="category" name="category">
						<?php
							$cats = $this -> course_cat -> get();
							foreach($cats as $cat)
							{
								?>
								<option value="<?=$cat -> id;?>"><span class="<?=$cat->color_tag;?>"><?=$cat->category;?></span></option>
								<?php
							}?>

						</select>
					</td>
				</tr>

				<tr>
					<td><label>Visible:</label></td>
					<td>
						<section class="onoffswitch">
							<input type="checkbox" name="status" class="onoffswitch-checkbox" id="myonoffswitch" checked>
							<label class="onoffswitch-label" for="myonoffswitch">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</section>
					</td>
				</tr>
				<tr>
					<td><label>Difficulty Level</label></td>
					<td><input type="radio" name="level" value="beginner" /> Beginner <input type="radio" name="level" value="beginner" /> Intermediate <input type="radio" name="level" value="beginner" /> Advanced</td>
				</tr>
				<tr>
					<td><label>Points</label></td>
					<td>
						<select id="category" name="">
							<option value="1" selected="selected">100</option>
							<option value="2">200</option>
							<option value="3">300</option>
							<option value="4">400</option>
							<option value="5">500</option>
							<option value="6">600</option>
							<option value="7">700</option>
							<option value="8">800</option>
							<option value="9">900</option>
							<option value="10">1000</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Developed By</label></td>
					<td>
						<select id="category" name="">
							<option select="selected"></option>
							<option value="1">Udemy</option>
							<option value="2">Khan Academy</option>
							<option value="3">Lynda</option>
							<option value="4">Team Tree House</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Learning Outcomes:</label></td>
					<td><textarea rows="4" cols="50" placeholder="Write about what students will learn"></textarea></td>
				</tr>
				<tr>
					<td><label>Target Audience:</label></td>
					<td><textarea rows="4" cols="50" placeholder="Write about who should take this course"></textarea></td>
				</tr>
				<tr>	
					<td><label>Section 1</label></td>
					<td><input class="name" type="text" name="coursetitle" placeholder="Section Name Here" /></td>
				</tr>
				<tr>
					<td><label>Video 1</label></td>
					<td><input class="name" type="text" name="videotitle" placeholder="Video Title Here" /></td>
				</tr>
				<tr>
					<td></td>
					<td>Video:1 &nbsp;&nbsp;&nbsp;<input type="file" multiple=""/></td>
				</tr>
				<tr>
					<td><label>Add SRT*</label></td>
					<td><input type="file" multiple=""/></td>
				</tr>
				<tr>
					<td><label>Course Content</label></td>
					<td>
						Course Files (ZIP) &nbsp;&nbsp;<input type="file" multiple=""/><br />

					</tr>
					<tr>
						<td><label>Teacher's Notes</label></td>
						<td>
							Additional  Files  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" multiple=""/><br />
							External Reading &nbsp;&nbsp;&nbsp;<input type="file" multiple=""/>
						</tr>
						<tr>
							<td></td>
							<td>
								<input class="submit_form" type="submit" name="submit" value="Save" />
								<input type="reset" name="reset" value="Reset" />
								<br /><br />
								<small style="float:right">*Optional Fields</small>
							</td>
						</tr>
					</table>
				</form>
			</section>

			<section class="clear"></section>

			<script>
				$(document).ready(function(){
					console.log('doc ready');
					$('.submit_form').click(function(){
						console.log('submiting form');
						$('form .add-course.dashboard').submit();
					});
				});
			</script>