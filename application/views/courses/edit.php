<div class="container">
	<div class="form-group" style="display: inline-block;">
	<?php echo form_open('records/update_stud/'.$stud_id); ?>
		<label>First Name:</label>
		<input type="text" class="form-control" name="s_fname">
		<label>Middle Name:</label>
		<input type="text" class="form-control" name="s_mname">
		<label>Last Name:</label>
		<input type="text" class="form-control" name="s_lname">
		<label>Sex</label>
		<select name="s_gender" class="form-control">
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select></br>
		<button type="submit" class="form-control btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
	</div>
</div>