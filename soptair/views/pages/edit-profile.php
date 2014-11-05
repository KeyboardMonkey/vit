<section class="content-md">
	<?=$message;?>
	<?=validation_errors();?>
		<!-- <form method="post" action="<?=base_url();?>index.php/users/edit/<?=$user->user_id;?>"> -->
		<?=form_open_multipart('users/edit/'.$user->user_id)?>
		<table class="editform">
			<tr>
				<input type="hidden" value="<?=$user->user_id;?>" name="id"/>
				<th><label>Your Photo</label></th> <?php // echo $user-> picture;?>
				<td><input type="file" multiple=""/></td>
			</tr>
			<tr>
				<th><label>First Name</label></th>
				<td><input type="text" name="first_name" value="<?= $user -> username;?>"/></td>
			</tr>
			<tr>
				<th><label>Last Name</label></th>
				<td><input type="text" name="last_name" value="<?= $user -> username;?>" /></td>
			</tr>
			<tr>
				<th><label>Password</label></th>
				<td><input type="password" name="password" value="**_OLD_PWD_**"/></td>
			</tr>
			<tr>
				<th><label>Password Confirm</label></th>
				<td><input type="password" name="password_conf" value="**_OLD_PWD_**"/></td>
			</tr>
			<tr>
				<th><label>Email Address</label></th>
				<td><input type="text" name="email" value="<?= $user -> email;?>"/></td>
			</tr>

			<tr>
				<th><label>Vitorials Profile URL</label></th>
				<td><input type="text" name="" /></td>
			</tr>

			<tr>
				<th><label>Country</label></th>
				<td>
					<select id="category" name="">
						<option select="selected">Choose Country</option>
						<option value="1">Pakistan</option>
						<option value="2">Saudi Arabia</option>
						<option value="3">Turkey</option>
						<option value="4">Indonesia</option>
					</select>
				</td>
			</tr>

			<tr>
				<th><label>Highest Level of Education</label></th>
				<td>
					<select id="category" name="">
						<option select="selected">Choose One</option>
						<option value="1">Graduation</option>
						<option value="2">Master</option>
						<option value="3">PHD</option>
						<option value="4">Post PHD</option>
					</select>
				</td>
			</tr>
			<tr>
				<th><label>I am looking for work</label></th>
				<td>
					<select id="category" name="">
						<option select="selected">Choose One</option>
						<option value="1">Yes</option>
						<option value="2">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<th><label>Company Name</label></th>
				<td><input type="text" name="" /></td>
			</tr>
			<tr>
				<th><label>Job Title</label></th>
				<td><input type="text" name="" /></td>
			</tr>
			<tr>
				<th><label>Spoken Languages</label></th>
				<td><input type="text" name="" /></td>
			</tr>

			<tr>
				<th><label>Publications</label></th>
				<td><input type="text" name="" /></td>
			</tr>
			<tr>
				<th><label>Social Profile</label></th>
				<td><input type="text" name="" /></td>
			</tr>
			<tr>
				<th><label>Website URL</label></th>
				<td><input type="text" name="" /></td>
			</tr>
			<tr>
				<th><label>About You</label></th>
				<td><textarea rows="4" cols="50" name=""></textarea></td>
			</tr>
		</table>
		<?=form_submit('Submit', 'Submit');?>
		<!-- <input class="form-action" type="submit" value="Submit" /> -->
		<?=form_close();?>
</section>