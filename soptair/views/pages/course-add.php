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
					<td><textarea rows="4" cols="50" placeholder="Write Course Summary Here" name="description"></textarea></td>
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
					<td><label>Section 1</label></td>
					<td><input class="name" type="text" name="sectiontitle" placeholder="" /></td>
				</tr>
				<tr>
					<td><label>Video 1</label></td>
					<td><input class="name" type="text" name="videotitle" placeholder="Video Title Here" /></td>
				</tr>
				<tr>
					<td></td>
					<td>Video:1 &nbsp;&nbsp;&nbsp;<input type="file" name="videofile" multiple=""/></td>
				</tr>
				<tr>
					<td><label>Add SRT*</label></td>
					<td><input type="file" multiple="" name="srt" /></td>
				</tr>
				<div id="video_div"> </div>
				<tr>
					<td><label>Course Content</label></td>
					<td>
						Course Files (ZIP) &nbsp;&nbsp;<input type="file" name="fullcoursefileszip" multiple=""/><br />

					</tr>
					
				<tr>
					<td><label>Addt. File Title</label></td>
					<td><input class="name" type="text" name="additionalfiletitle" placeholder="Video Title Here" /></td>
				</tr>
				<tr>
					<td></td>
					<td>Addition File &nbsp;&nbsp;&nbsp;<input type="file" name="additionalfile" multiple=""/></td>
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

					

					<input type='number' value='0' name='total_videos' id='total_videos'>
            
            
				</form>
				<button id="add_video">&nbsp;+&nbsp;</button>
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


			<script type="text/javascript">
				$('#add_video').click(function(){
				console.log('button clicked');
				console.log($('#video_div').html());
                $('#video_div').append(
                    
                    '<input type="text" name="videotitle_' + $('#total_videos').val()+ '"/>' + 
                    '<input type="file" name="videofile_' + $('#total_videos').val() + '"/>'   
                );
                console.log($('#total_videos'));
                console.log($('#total_videos').val());
                
                $('#total_videos').val(parseInt($('#total_videos').val() )+ 1);
            });
			</script>