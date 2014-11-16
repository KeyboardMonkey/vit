<section class="container">
	<section class="content-md">
		<?=$message;?>
		<?=validation_errors();?>
		<form method="post">
			<table class="editform">
				<tr>
					<td><label>Track Title</label></td>
					<td><input type="text" name="track_title" /></td>
				</tr>
				<tr>
					<td><label>One Line Intro</label></td>
					<td><input type="text" name="one_line_intro" /></td>
				</tr>
				<tr>
					<td><label>Difficulty Level</label></td>
					<td><input type="radio" name="level" value="Beginner" /> Beginner <input type="radio" name="level" value="Intermediate" /> Intermediate <input type="radio" name="level" value="Advanced" /> Advanced</td>
				</tr>
			</tr>
			<tr>
				<td><label>Course Pool</label></td>
				<td>
					<select class="course-pool-left" id="category" multiple >
					
						
					</select>
					<button class="course-pool" type="button">&lt;</button><br /><br />
					<button class="course-pool" type="button">&gt;</button>
					<select class="course-pool-right" id="category" multiple >
					<?php
							$course = new course();
							$course_list = $this -> course -> get();
							foreach($course_list as $course)
							{
								?>
								<option value="<?=$course -> course_id;?>"><?=$course->full_name;?></option>
								<?php
							}?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Track Description</label></td>
				<td><textarea rows="4" cols="50" name="track_description"></textarea></td>
			</tr>
			<tr>
				<td><label>Additional File</label></td>
				<td>
					<input id="teacher-notes" type="text" name="additional_file_title" placeholder="Teacher's Notes" /> Additional File <input type="file" name="additional_file_path" /><button type="button">Upload</button>
					
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
				<td></td>
				<td>
					<input type="submit" name="submit" value="Save" />
					<input type="reset" name="reset" value="Reset" />
				</td>
			</tr>
		</table>
	</form>
</section>

<section class="clear"></section>