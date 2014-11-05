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
					<td><label>Course Short Name:</label></td>
					<td><input class="name" type="text" name="courseshortname" placeholder="Course Short Name" /></td>
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
					<td><label>Description:</label></td>
					<td><textarea rows="4" cols="50" placeholder="Write Course Summary Here"></textarea></td>
				</tr>
					<tr>
						<td><label>Section 1</label></td>
						<td><input class="name" type="text" name="coursetitle" placeholder="" /></td>
					</tr>
					<tr>
						<td><label>Video 1</label></td>
						<td><input class="name" type="text" name="videotitle" placeholder="Video Title Here" /></td>
					</tr>
					<tr>
						<td><label>Add SRT</label></td>
						<td><input type="file" multiple=""/></td>
					</tr>
					<tr>
						<td><label>New Assessment</label></td>
						<td><input class="name" type="text" name="quiztitle" placeholder="Quiz Title Here" /></td>
					</tr>
					<tr>
						<td><label>Question</label></td>
						<td><input class="name" type="text" name="question" placeholder="Your Question Here" /></td>
					</tr>
					<tr>
						<td><label>Option 1</label></td>
						<td><input class="answer" type="text" name="option" placeholder="" /><input type="radio" name="option" value="answer" />True</td>
					</tr>
					<tr>
						<td><label>Option 2</label></td>
						<td><input class="answer" type="text" name="option" placeholder="" /><input type="radio" name="option" value="answer" />True</td>
					</tr>
					<tr>
						<td><label>Option 3</label></td>
						<td><input class="answer" type="text" name="option" placeholder="" /><input type="radio" name="option" value="answer" />True</td>
					</tr>
					<tr>
						<td><label>Option 4</label></td>
						<td><input class="answer" type="text" name="option" placeholder="" /><input type="radio" name="option" value="answer" />True</td>
					</tr>
				<tr>
						<td><label>Addtional Content</label></td>
						<td>
							Additional Files &nbsp;&nbsp;&nbsp;<input type="file" multiple=""/><br />
							External Reading &nbsp;<input type="file" multiple=""/>
				</tr>
				<tr>
					<td></td>
					<td>
						<input class="submit_form" type="submit" name="submit" value="Save" />
						<input type="reset" name="reset" value="Reset" />
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