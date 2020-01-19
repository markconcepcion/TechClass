<head>
	<style type="text/css">
		.container{
			margin: 1%;
		}
		.menu{
			border: 2px solid #ddd;
		    padding: 2px; 
		    height: 62%;
		    text-align: justify;
		}
		.option{
	      display: inline-block;
	    }
	    .name{
	    	max-width: 20%;
	    }
	   .row{
		border: 2px solid #ddd;
	   	margin: 5px;
	   	margin-top: 0;
	   }
	   td{
	   	border: 1px solid #ddd;
	   }
	</style>
</head>
	<div class="row">
		<div class="col-md-2 menu"><b>
		        <ul class="nav option table table-striped">
		        <li class="nav-item"><a class="nav-link list-group-item active show" data-toggle="tab" href="#rec_sheet">Record Sheet</a></li>
				<li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#add_stud">Add Student</a></li>
				<li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#add_quiz">Quizzes</a></li>
				<li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#add_ass">Assignments</a></li>
				<li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#add_pro">Activities/Projects</a></li>
				<li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#add_act">Exams</a></li>
				<li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#add_pres	">Presentations</a></li>
				<li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#crit	">Delete/Edit<span><br></span> Student's Info</a></li>
		      </ul></b>
		</div>
		<div class="col-md-10">
			<div class="row" style="border: 0px; padding-top: 5px;">
				<div class="col-md-6">
					<h4><?php echo $classes['c_name'], "   " , $classes['c_section'] ;  
						if ($quiz_total == 0) { $quiz_total = 1; }
						if ($act_total == 0) { $act_total = 1; }
						if ($ass_total == 0) { $ass_total = 1; }
						if ($pre_total == 0) { $pre_total = 1; } 
						if ($pro_total == 0) { $pro_total = 1; } ?>
					</h4>
				</div>			
				<div class="col-md-6" style="text-align: right;">
					<a href="<?php echo base_url(); ?>"><button class="btn btn-danger">X</button></a>
				</div>	
			</div>
			<div id="myTabContent" class="tab-content"  style="margin-top:10px; margin-left: 1px;">
		       <div class="tab-pane fade active show" id="rec_sheet" style="margin-left: 1px;">
		         <table class="table table-hover table-sm">
		         	<tr class="table-primary">
		         		<td class="name"><b>Students</b></td>
		         		<td><b id="quizPer">Quizzes</b></td>
		         		<td><b id="assPer">Assignments</b></td>
		         		<td><b id="proPer">Activities/Projects</b></td>
		         		<td><b id="actPer">Exams</b></td>
		         		<td><b id="prePer">Presentation</b></td>
		         		<td><b id="prePer">General Average</b></td>
		         	</tr>
		         	<?php foreach ($students as $stud) : ?>
		         		<tr>
		         			<td class="name"><?php echo $stud->s_lname,', ',$stud->s_fname, ' ', $stud->s_mname ; ?></td>
		         			<?php
		         				$total_score = 0;
	      						foreach ($quizzes as $quiz) :
	      							if ($stud->s_id === $quiz['qs_sid']) {
	      								$total_score = $total_score+$quiz['qs_score'];
	      							}
	      						endforeach;
	      						$qscore = (($total_score/$quiz_total)*$classes['c_quiz']);
      							echo '<td>',$qscore,'</td>';

		         				$total_score = 0;
	      						foreach ($assignments as $assign) :
	      							if ($stud->s_id === $assign['as_sid']) {
	      								$total_score = $total_score+$assign['as_score'];
	      							}
	      						endforeach;
	      						$ascore = (($total_score/$ass_total)*$classes['c_ass']);
      							echo '<td>',$ascore,'</td>';

      							$total_score = 0;
	      						foreach ($projects as $pro) :
	      							if ($stud->s_id === $pro['pros_sid']) {
	      								$total_score = $total_score+$pro['pros_score'];
	      							}
	      						endforeach;
	      						$proscore = (($total_score/$pro_total)*$classes['c_pro']);
      							echo '<td>',$proscore,'</td>'; 

		         				$total_score = 0;
	      						foreach ($activities as $act) :
	      							if ($stud->s_id === $act['acs_sid']) {
	      								$total_score = $total_score+$act['acs_score'];
	      							}
	      						endforeach;
	      						$acscore = (($total_score/$act_total)*$classes['c_act']);
      							echo '<td>',$acscore,'</td>'; 

      							$total_score = 0;
	      						foreach ($presentations as $pre) :
	      							if ($stud->s_id === $pre['pres_sid']) {
	      								$total_score = $total_score+$pre['pres_score'];
	      							}
	      						endforeach;
	      						$prescore = (($total_score/$pre_total)*$classes['c_pre']);
      							echo '<td>',$prescore,'</td>'; 
      						?>
		         			<td><?php echo ($qscore+$ascore+$proscore+$acscore+$prescore); ?></td>
		         		</tr>
		         	<?php endforeach; ?>
		         </table>
		         <table class="table table-striped">
		          		<tr class="table-primary">
		          			<td><h3>Criteria</h3></td>	
		          			<td></td>	
		          			<td></td>	
		          			<td></td>	
		          			<td></td>	
		          		</tr>
		          		<tr>
		          			<td><h5>Quizzes:</h5></td>
				          	<td><h5>Assignments:</h5></td>
				          	<td><h5>Activities/Projects:</h5></td>
				          	<td><h5>Exam:</h5></td>
				          	<td><h5>Presentations:</h5></td>
		          		</tr>
		          		<tr>
			          		<td><h5><?php echo $classes['c_quiz'],'%'; ?></h5></td>
			          		<td><h5><?php echo $classes['c_ass'],'%'; ?></h5></td>
			          		<td><h5><?php echo $classes['c_pro'],'%'; ?></h5></td>
			          		<td><h5><?php echo $classes['c_act'],'%'; ?></h5></td>
			          		<td><h5><?php echo $classes['c_pre'],'%'; ?></h5></td>
		          		</tr>
		          	</table>
		       </div>


		       <div class="tab-pane fade" id="add_stud">
		          <div class="container">
		          	<div class="form-group" style="display: inline-block;">
		          	<?php echo form_open('records/add_stud/'.$classes['c_id']); ?>
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
		          		<button type="submit" class="form-control btn btn-primary">Add</button>
		          	<?php echo form_close(); ?>
		          	</div>
		          </div>
		      </div>



		      <div class="tab-pane fade" id="add_quiz">
      				<table class="table table-striped table-sm">
      					<thead><tr style="text-align: center;">
      						<td></td>
      						<td><b>Student's Name</b></td>
      						<?php for ($i=1; $i <= $quiz_num; $i++) { 
      							echo '<td><b>#',$i,'</b></td>';
      						}
      					echo '<td><b>&Sigma;</b></td>
      						 <td><b>Percent</b></td>
      						 </tr></thead>';
					 	echo form_open('records/index/'.$classes['c_id']); 
      					foreach ($students as $stud) :
			         		echo '<tr><td style="max-width: 25px;"><input type="number" name="q_score[]"  style="max-width: 35px;" required=""></td>';
      						echo '<td>',$stud->s_lname,', ',$stud->s_fname,' ',$stud->s_mname;'</td>';
      						$total_score = 0;
      						foreach ($quizzes as $quiz) :
      							if ($stud->s_id === $quiz['qs_sid']) {
      								$total_score = $total_score+$quiz['qs_score'];
      								echo '<td>',$quiz['qs_score'],'</td>';
      							}
      						endforeach;
  							echo '<td>',$total_score,'</td>';
  							echo '<td id="quiz_Per">',(($total_score/$quiz_total)*$classes['c_quiz']),'</td>';
			         		echo '</tr>';
		         			echo '<input type="number" name="q_id[]" hidden="" value="',$quiz_id,'">
		         			<input type="number" name="q_stud[]" hidden=""  value="',$stud->s_id,'">';
      					endforeach; ?>
  					</table>
  					<div class="row" style="border: 0px;">
  						<div class="col-md-6">
  							<table class="table-sm">
			         		<tr>
			         			<td><label>Quiz Topic:</label></td>
			         			<td><input type="text"  name="quiz_topic"></td>
			         		</tr>
			         		<tr>
			         			<td><label>Quiz Items:</label></td>
			         			<td><input type="number" name="q_items"></br></td>
			         			<td><button type="submit" class="form-control btn btn-primary">Add</button></td>
			         		</tr>
	      					</table>
  						</div>
  						<div class="col-md-6"><h1>Total Items: <?php echo $quiz_total; ?></h1></div>
  					</div>
      				<?php echo form_close(); ?>
		      </div>

		      <!-- ASSIGNMENT TAB -->
		      <div class="tab-pane fade" id="add_ass">
		      	<table class="table table-striped table-sm">
  					<thead><tr style="text-align: center;">
  						<td></td>
  						<td><b>Student's Name</b></td>
  						<?php for ($i=1; $i <= $ass_num; $i++) { 
  							echo '<td><b>#',$i,'</b></td>';
  						}
  					echo '<td><b>&Sigma;</b></td>';
  					echo '<td><b>Percent</b></td>';
  					echo '</tr></thead>';
				 echo form_open('records/assignment/'.$classes['c_id']); 
  					foreach ($students as $stud) :
		         		echo '<tr><td style="max-width: 25px;"><input type="number" name="ass_score[]"  style="max-width: 35px;" required=""></td>';
  						echo '<td>',$stud->s_lname,', ',$stud->s_fname,' ',$stud->s_mname;'</td>';
  						$total_score = 0;
  						foreach ($assignments as $assign) :
  							if ($stud->s_id === $assign['as_sid']) {
  								$total_score = $total_score+$assign['as_score'];
  								echo '<td>',$assign['as_score'],'</td>';
  							}
  						endforeach;	
						echo '<td>',$total_score,'</td>';
						echo '<td>',(($total_score/$ass_total)*$classes['c_ass']),'</td>';
		         		echo '</tr>';
		         		echo '<input type="number" name="ass_id[]" hidden="" value="',$ass_id,'">
		         			<input type="number" name="ass_stud[]" hidden=""  value="',$stud->s_id,'">';
  					endforeach; ?>
					</table>
					<div class="row" style="border: 0px;">
						<div class="col-md-6">
							<table class="table-sm">
		         		<tr>
		         			<td><label>Assignment Items:</label></td>
		         			<td><input type="number" name="ass_items"></br></td>
		         			<td><button type="submit" class="form-control btn btn-primary">Add</button></td>
		         		</tr>
      					</table>
						</div>
						<div class="col-md-6"><h1>Total Items: <?php echo $ass_total; ?></h1></div>
					</div>
  				<?php echo form_close(); ?>
		      </div>

		      <!-- ACTIVITY TAB -->
		      <div class="tab-pane fade" id="add_act">
		          <table class="table table-striped table-sm">
  					<thead><tr style="text-align: center;">
  						<td></td>
  						<td><b>Student's Name</b></td>
  						<?php for ($i=1; $i <= $act_num; $i++) { 
  							echo '<td><b>#',$i,'</b></td>';
  						}
  					echo '<td><b>&Sigma;</b></td>';
  					echo '<td><b>Percent</b></td>';
  					echo '</tr></thead>';
				 	echo form_open('records/activity/'.$classes['c_id']); 
  					foreach ($students as $stud) :
		         		echo '<tr><td style="max-width: 25px;"><input type="number" name="act_score[]"  style="max-width: 35px;" required=""></td>';
  						echo '<td>',$stud->s_lname,', ',$stud->s_fname,' ',$stud->s_mname;'</td>';
  						$total_score = 0;
  						foreach ($activities as $act) :
  							if ($stud->s_id === $act['acs_sid']) {
  								$total_score = $total_score+$act['acs_score'];
  								echo '<td>',$act['acs_score'],'</td>';
  							}
  						endforeach;
						echo '<td>',$total_score,'</td>';
						echo '<td>',(($total_score/$act_total)*$classes['c_act']),'</td>';
		         		echo '</tr>';
	         			echo '<input type="number" name="act_id[]" hidden="" value="',$act_id,'">
	         			<input type="number" name="act_stud[]" hidden=""  value="',$stud->s_id,'">';
  					endforeach; ?>
					</table>
					<div class="row" style="border: 0px;">
						<div class="col-md-6">
							<table class="table-sm">
		         		<tr>
		         			<td><label>Activity Items:</label></td>
		         			<td><input type="number" name="act_items"></br></td>
		         			<td><button type="submit" class="form-control btn btn-primary">Add</button></td>
		         		</tr>
      					</table>
						</div>
						<div class="col-md-6"><h1>Total Items: <?php echo $act_total; ?></h1></div>
					</div>
  				<?php echo form_close(); ?>
		      </div>

		      <!-- PROJECT TAB -->
		      <div class="tab-pane fade" id="add_pro">
		          <table class="table table-striped table-sm">
      					<thead><tr style="text-align: center;">
      						<td></td>
      						<td><b>Student's Name</b></td>
      						<?php for ($i=1; $i <= $pro_num; $i++) { 
      							echo '<td><b>#',$i,'</b></td>';
      						}
      					echo '<td><b>&Sigma;</b></td>
      						 <td><b>Percent</b></td>
      						 </tr></thead>';
					 	echo form_open('records/project/'.$classes['c_id']); 
      					foreach ($students as $stud) :
			         		echo '<tr><td style="max-width: 25px;"><input type="number" name="pro_score[]"  style="max-width: 35px;" required=""></td>';
      						echo '<td>',$stud->s_lname,', ',$stud->s_fname,' ',$stud->s_mname;'</td>';
      						$total_score = 0;
      						foreach ($projects as $pro) :
      							if ($stud->s_id === $pro['pros_sid']) {
      								$total_score = $total_score+$pro['pros_score'];
      								echo '<td>',$pro['pros_score'],'</td>';
      							}
      						endforeach;
  							echo '<td>',$total_score,'</td>';
  							echo '<td id="quiz_Per">',(($total_score/$pro_total)*$classes['c_pro']),'</td>';
			         		echo '</tr>';
		         			echo '<input type="number" name="pro_id[]" hidden="" value="',$pro_id,'">
		         			<input type="number" name="pro_stud[]" hidden=""  value="',$stud->s_id,'">';
      					endforeach; ?>
  					</table>
  					<div class="row" style="border: 0px;">
  						<div class="col-md-6">
  							<table class="table-sm">
			         		<tr>
			         			<td><label>Project Items:</label></td>
			         			<td><input type="number" name="pro_items"></br></td>
			         			<td><button type="submit" class="form-control btn btn-primary">Add</button></td>
			         		</tr>
	      					</table>
  						</div>
  						<div class="col-md-6"><h1>Total Items: <?php echo $pro_total; ?></h1></div>
  					</div>
      				<?php echo form_close(); ?>
		      </div>

		      <!-- PRESENTATION TAB -->
		      <div class="tab-pane fade" id="add_pres">
				<table class="table table-striped table-sm">
      					<thead><tr style="text-align: center;">
      						<td></td>
      						<td><b>Student's Name</b></td>
      						<?php for ($i=1; $i <= $pre_num; $i++) { 
      							echo '<td><b>#',$i,'</b></td>';
      						}
      					echo '<td><b>&Sigma;</b></td>
      						 <td><b>Percent</b></td>
      						 </tr></thead>';
					 	echo form_open('records/presentation/'.$classes['c_id']); 
      					foreach ($students as $stud) :
			         		echo '<tr><td style="max-width: 25px;"><input type="number" name="pre_score[]"  style="max-width: 35px;" required=""></td>';
      						echo '<td>',$stud->s_lname,', ',$stud->s_fname,' ',$stud->s_mname;'</td>';
      						$total_score = 0;
      						foreach ($presentations as $pre) :
      							if ($stud->s_id === $pre['pres_sid']) {
      								$total_score = $total_score+$pre['pres_score'];
      								echo '<td>',$pre['pres_score'],'</td>';
      							}
      						endforeach;
  							echo '<td>',$total_score,'</td>';
  							echo '<td>',(($total_score/$pre_total)*$classes['c_pre']),'</td>';
			         		echo '</tr>';
		         			echo '<input type="number" name="pre_id[]" hidden="" value="',$pre_id,'">
		         			<input type="number" name="pre_stud[]" hidden=""  value="',$stud->s_id,'">';
      					endforeach; ?>
  					</table>
  					<div class="row" style="border: 0px;">
  						<div class="col-md-6">
  							<table class="table-sm">
			         		<tr>
			         			<td><label>Presentation Items:</label></td>
			         			<td><input type="number" name="pre_items"></br></td>
			         			<td><button type="submit" class="form-control btn btn-primary">Add</button></td>
			         		</tr>
	      					</table>
  						</div>
  						<div class="col-md-6"><h1>Total Items: <?php echo $pre_total; ?></h1></div>
  					</div>
      				<?php echo form_close(); ?>		          	
		      </div>

		      <div class="tab-pane fade" id="crit">
		          	<table class=" table table-secondary table-sm">
		          		<thead><tr>
		          			<td>Student's Name</td>
		          			<td>Options</td>
		          		</tr></thead>
						<?php foreach ($students as $stud) : ?>
							<tr>
								<td><?php echo $stud->s_lname,', ',$stud->s_fname,' ',$stud->s_mname; ?></td>
								<td><ul class="nav">
									<li class="nav-item">
										<a class="btn btn-secondary" href="<?php echo site_url('records/edit_stud/'.$stud->s_id); ?>">Edit</a>
									</li>
									<li class="nav-item">
										<a class="btn btn-danger" href="<?php echo site_url('records/delete_stud/'.$stud->s_id); ?>">Delete</a>
									</li>
								</ul></td>
							</tr>
						<?php endforeach; ?>
		          	</table>
		      </div>
		</div>
</div>