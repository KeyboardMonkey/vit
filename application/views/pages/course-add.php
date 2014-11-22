<section class="container">
	<section class="content-lg">
		<?=$message;?>
		<?=validation_errors();?>
		<form action="<?=base_url('index.php/courses/add_new_course');?>" class="add-course dashboard" method="post" enctype="multipart/form-data">
			<table class="add-course">
				<tr>
                    <input type="hidden" value="-1" id="course_id" />
					<td><label>Course Full Name:</label></td>
					<td><input class="name" id="coursefullname" type="text" name="coursefullname" placeholder="Course Full Name" /></td>
				</tr>
				<tr>
					<td><label>One Line Intro:</label></td>
					<td><input class="name" type="text" id="courseshortname" name="courseshortname" placeholder="Course Short Name" /></td>
				</tr>
				<tr>
					<td><label>Description:</label></td>
					<td><textarea rows="4" cols="50" placeholder="Write Course Summary Here" id="description" name="description"></textarea></td>
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
					<td><input type="radio"  checked name="diff_level" value="beginner" /> Beginner
                        <input type="radio"   name="diff_level" value="intermediate" /> Intermediate
                        <input type="radio"   name="diff_level" value="advanced" /> Advanced</td>
				</tr>
				<tr>
                    <td>
                        <button id="register_course"   value="Save" > Save </button>

                    </td>
				</tr>
                <script>
                    $(document).ready(function () {
                        $('form').submit(function(e){
                            e.preventDefault();
                        });
                            $('#register_course').click(function (e) {
                                e.preventDefault();
                            var coursefullname = $("#coursefullname").val();
                            var courseshortname = $('#courseshortname').val();
                            var description = $('#description').val();
                            var category = $('#category option:selected').val();
                            var status = 'no';
                                if($('#myonoffswitch').is(':checked'))
                                {
                                    status = 'yes';
                                }
                            var level = $('input[name=diff_level]:checked').val();
                               // alert(level + " " + status);
                            var url="<?=base_url('index.php/courses/add_new_course');?>";
                            var posting =
                                $.ajax({
                                    type: 'POST',
                                    url: url,
                                    data: {
                                        coursefullname: coursefullname,
                                        courseshortname: courseshortname,
                                        description: description,
                                        category: category,
                                        status: status,
                                        level: level

                                    },
                                    success: function (data) {
                                        //alert(data);
                                        var obj = jQuery.parseJSON(data);
                                        console.log(obj);
                                        if(obj.status == 'ok')
                                        {
                                            $('#register_course').hide();
                                            $('#course_id').val(obj.id);
                                            $("#coursefullname").attr('disabled', true);
                                            $("#courseshortname").attr('disabled', true);
                                            $("#description").attr('disabled', true);
                                            $("#category").attr('disabled', true);
                                            $("#myonoffswitch").attr('disabled', true);
                                            $("input[name=diff_level]").attr('disabled', true);
                                            $('#submit_video').show();

                                        }
                                        $('#error_div').html(obj.msg);

                                    },
                                    error: function (request, status, error) {
                                        alert(request.responseText);
                                    }
                                });
                                var uploadVideo = function(){

                                };
                        });
                    });
                </script>
				<tr>
					<td><label>Section 1</label></td>
					<td><input class="name" type="text" name="sectiontitle" placeholder="" /></td>
				</tr>
				<tr>
					<td><label>Video 1</label></td>
					<td><input class="name" type="text" id="videotitle" name="videotitle" placeholder="Video Title Here" /></td>
				</tr>
				<tr>
					<td></td>
					<td>Video:1 &nbsp;&nbsp;&nbsp;<input type="file" id="videofile" name="videofile" /></td>
				</tr>
                <tr>
                    <td><button id="submit_video">Submit Video</button></td>
                </tr>
                <script>
                    $(document).ready(function () {
                        $('#submit_video').hide();
                        $('#submit_video').click(function(e) {
                        	console.log("Submitting video");
                            $.ajaxFileUpload(
                            {
                                url 			:'<?=base_url('index.php/upload/upload_course_lecture' );?>/' + $('#course_id').val(),
                                secureuri		:false,
                                fileElementId	:'videofile',
                                dataType		: 'json',
                                data			: {
					                                    'title' : $('#videotitle').val()
					                              },
                                success	: function (data)
                                {
                                	console.log(data.status);
                                
                                    if(data.status != 'error')
                                    {
                                    	console.log("OK");
                                        //  refresh_files();
                                       $('#result_div').append('<p>' + $('#videotitle').val() + ' added </p>');
                                       $('#result_div').append('<p><a href="<?=base_url();?>' + data.path + '"> file path</a> </p>');
                                       
                                       $('#videotitle').val('');

                                    }
                                   
                                },
                                 error: function (request, status, error) {
                                        alert(request.responseText);
                                    }
                            });
                            return false;
                        });
                    });
                </script>

			<!--	<tr>
					<td><label>Add SRT*</label></td>
					<td><input type="file" multiple="" name="srt" /></td>
				</tr>
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
				</tr> -->
						<tr>
							<td></td>
							<td>
								<input type="reset" name="reset" value="Reset" />
								<input class="submit_form" type="submit" name="submit" value="Save" />
								<br /><br />
								<small style="float:right">*Optional Fields</small>
							</td>
						</tr>
					</table>

					

					<input type='hidden' value='0' name='total_videos' id='total_values'>
					
            <tr>
                <td>
                    <div id="error_div"></div>
                </td>
            </tr>
              <tr>
                <td>
                    <div id="result_div"></div>
                </td>
            </tr>
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


			