<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Task</title>
</head>
<body>

	<div class="container mt-5 mb-5">

		<div class="accordion">

			<div class="accordion-item">

				<h3 class="accordion-header" id="panel-taskDetails-header">

					<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panel-taskDetails-body" aria-controls="panel-taskDetails-body" aria-expanded="true">Task Details</button>
					
				</h3>

				<div class="accordion-collapse collapse show" id="panel-taskDetails-body" aria-labelledby="panel-taskDetails">
					
					<div class="accordion-body">
						
						<form method="post" action=" <?php echo base_url(); ?>TaskManagement/addTaskDetails ">

							<div class="card task mt-3 mb-3">

								<div class="card-body">
								
									<table class="table table-borderless d-flex justify-content-center">

										<tr>
											
											<td><label><b>Project Name</b></label></td>
											<td>

												<select name="project_name" class="input-field" required>

													<option></option>
												
													<?php foreach ($project_name as $key ) { ?>	

															<option value="<?php echo $key->project_name; ?>"><?php echo $key->project_name; ?></option>

													<?php } ?>
													
												</select>

											</td>

										</tr>
										<tr>
											
											<td><label><b>Task Name</b></label></td>
											<td><input type="text" name="task_name" class="input-field" required></td>

										</tr>
										<tr>
											
											<td><label><b>Task Description</b></label></td>
											<td><textarea name="task_description" class="input-field" rows="5" cols="21" required></textarea></td>

										</tr>
										<tr>
											
											<td><label><b>Task Owner</b></label></td>
											<td>

												<select name="task_owner" class="input-field" required>
												
													<option></option>

													<?php foreach ($employee_name as $key ) { ?>
														
														<option value="<?php echo $key->employee_name; ?>"><?php echo $key->employee_name; ?></option>

													<?php } ?>
																				
												</select>

											</td>

										</tr>
										<tr>
											
											<td><label><b>Task Due Date</b></label></td>
											<td><input type="date" name="task_due_date" class="input-field" required></td>

										</tr>
										<tr>
											
											<td><label><b>Task Completed Date</b></label></td>
											<td><input type="date" name="task_completed_date" class="input-field" required></td>

										</tr>

									</table>

							</div>

						</div>

					</div>

				</div>
				
			</div>

			<div class="accordion-item">
				
				<h3 class="accordion-header" id="panel-followUp-header">
					
					<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panel-followUp-body" aria-expanded="true" aria-controls="panel-followUp-body">Task Follow Up Details</button>

				</h3>
				<div class="accordion-collapse collapse" id="panel-followUp-body" aria-labelledby="panel-followUp-header">

					<div class="accordion-body">

						<div class="card task mb-3">

							<div class="card-body">

								<table class="table table-borderless d-flex justify-content-center">

									<tr>
										
										<td><label><b>Follow Up Date</b></label></td>
										<td><input type="date" name="followup_date" class="input-field" required></td>

									</tr>
									<tr>
									
										<td><label><b>Follow Up Comments</b></label></td>
										<td><textarea name="followup_comments" class="input-field" rows="5" cols="21" required></textarea></td>

									</tr>
									<tr>
									
										<td><label><b>Followed Employee</b></label></td>
										<td>

											<select name="followed_employee" class="input-field" required>
											
												<option></option>
										
												<?php foreach ($employee_name as $key ) { ?>
													
													<option value="<?php echo $key->employee_name; ?>"><?php echo $key->employee_name; ?></option>

												<?php } ?>
											
											</select>

										</td>

									</tr>
									<tr>
										
										<td><label><b>Color of the Task</b></label></td>
										<td><input type="color" name="task_colour" required></td>

									</tr>

								</table>

								<div class="text-center">
									
									<button type="submit" name="create" class="btn btn-primary">ADD</button>

								</div>	

							</div>
							
						</div>

						</form>

					</div>
					
				</div>

			</div>
			
		</div>

	</div>

</body>
</html>