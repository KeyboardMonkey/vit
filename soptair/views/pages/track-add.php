<section class="container">
	<section class="content-md">
		<form action="">
			<table class="editform">
				<tr>
					<td><label>Track Title</label></td>
					<td><input type="text" name="" /></td>
				</tr>
				<tr>
					<td><label>One Line Intro</label></td>
					<td><input type="text" name="" /></td>
				</tr>
				<tr>
					<td><label>Difficulty Level</label></td>
					<td><input type="radio" name="level" value="beginner" /> Beginner <input type="radio" name="level" value="beginner" /> Intermediate <input type="radio" name="level" value="beginner" /> Advanced</td>
				</tr>
			</tr>
			<tr>
				<td><label>Course Pool</label></td>
				<td>
					<select class="course-pool-left" id="category" multiple >
						<option value="1">one</option>
						<option value="2">two</option>
						<option value="3">three</option>
						<option value="4">four</option>
						<option value="5">five</option>
						<option value="6">six</option>
						<option value="7">seven</option>
						<option value="8">eight</option>
						<option value="9">nine</option>
						<option value="10">ten</option>
						<option value="11">eleven</option>
						<option value="12">twelve</option>
					</select>
					<button class="course-pool" type="button"><</button><br /><br />
					<button class="course-pool" type="button">></button>
					<select class="course-pool-right" id="category" multiple >
						<option value="1">one</option>
						<option value="2">two</option>
						<option value="3">three</option>
						<option value="4">four</option>
						<option value="5">five</option>
						<option value="6">six</option>
						<option value="7">seven</option>
						<option value="8">eight</option>
						<option value="9">nine</option>
						<option value="10">ten</option>
						<option value="11">eleven</option>
						<option value="12">twelve</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Track Description</label></td>
				<td><textarea rows="4" cols="50" name=""></textarea></td>
			</tr>
			<tr>
				<td><label>Teacher's Notes</label></td>
				<td>
					<input id="teacher-notes" type="text" name="" placeholder="File Title" /> Additional File <input type="file" multiple=""/><button type="button">Upload</button><br />
					<input id="teacher-notes" type="text" name="" placeholder="File Title" /> Additional File <input type="file" multiple=""/><button type="button">Upload</button>
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