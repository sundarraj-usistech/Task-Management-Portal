<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>

	<?php $user_role = $this->session->userdata('user_role'); ?>

	<div class="container mt-5 mb-5">

		<div class="d-flex justify-content-between">
			
			<?php if ($user_role == 1) { ?>
			
				<span>
					
					<a href=" <?php echo base_url(); ?>TaskManagement/addEmployee " class="btn btn-secondary">ADD EMPLOYEE</a>

				</span>

			<?php }
			else{ ?>

				<span>
				
					<a href=" <?php echo base_url(); ?>TaskManagement/addProject " class="btn btn-secondary">ADD PROJECT</a>

				</span>

				<span>
					
					<a href=" <?php echo base_url(); ?>TaskManagement/addTask " class="btn btn-secondary">ADD TASK</a>

				</span>

			<?php } ?>

			<span>
				
				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/searchWithDueDate ">
					
					<label>Enter the Due-Date</label>
					<input type="date" name="search_with_due_date" required>
					<button type="submit" name="search" class="btn btn-primary"><img src="<?php echo base_url(); ?>assets/Icons/magnifying-glass-solid.svg" width="20" height="20"></button>

				</form>

			</span>

			<span>		
				
				<form method="post" action=" <?php echo base_url(); ?>TaskManagement/searchWithKeyword ">
					
					<input type="text" name="search_with_keyword" placeholder="Enter the Keyword">

					<button type="submit" name="search" class="btn btn-primary"><img src="<?php echo base_url(); ?>assets/Icons/magnifying-glass-solid.svg" width="20" height="20"></button>

				</form>

			</span>

			<span>
		
				<a href=" <?php echo base_url(); ?>TaskManagement/logout " class="btn btn-primary float-end">LOGOUT&nbsp<img src="<?php echo base_url(); ?>assets/Icons/right-from-bracket-solid.svg" width="20" height="20"></a>

			</span>


		</div>
		
		
	</div>

	
	
	<div class="container dashboard mt-5 mb-5">

		<div class="accordion" id="dashboard-accordion">

			<div class="accordion-item">

				<h3 class="accordion-header" id="panel-headingOne">

					<button class="accordion-button" type="button" data-bs-toggle="collapse"data-bs-target="#panel-bodyOne" aria-expanded="true" aria-controls="panel-bodyOne">Task Details</button>
					
				</h3>

				<div class="accordion-collapse collapse show" id="panel-bodyOne" aria-labelledby="panel-headingOne">
					
					<div class="accordion-body">
						
						<div class="row">
								
							<?php foreach ($task_details as $key) { ?>
							
								<div class="col-md-4 mt-2 mb-2">

									<div class="card">

										<div class="card-body">
											
											<h5 class="card-title"><?php echo $key->task_name; ?></h5>

											<p class="card-text"><?php echo $key->task_description; ?></p>

										</div>
										
									</div>
									
								</div>

							<?php } ?>	

						</div>

					</div>

				</div>
				
			</div>

			<?php if ($user_role == 1) { ?>

				<div class="accordion-item">

					<h3 class="accordion-header" id="panel-headingTwo">

						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel-bodyTwo" aria-controls="panel-bodyTwo" aria-expanded="false">Employee Details</button>
						
					</h3>

					<div class="accordion-collapse collapse" id="panel-bodyTwo" aria-labelledby="panel-headingTwo">

						<div class="accordion-body">

							<table class="table table-bordered table-hover">
							
								<thead>
									
									<tr>
										
										<th>Employee ID</th>
										<th>Employee Name</th>
										<th>Personal Email</th>
										<th>Official Email</th>
										<th>Contact Number</th>
										<th>Date Of Birth</th>
										<th>Date Of Joining</th>
										<th>Years of Experience</th>
										<th>Address</th>
										<th>Designation</th>
										<th>Password</th>

									</tr>

								</thead>

								<tbody>
								
								<?php foreach ($employee_details as $key) { ?>
									
									<tr>
										
										<td><?php echo $key->employee_id; ?></td>
										<td><?php echo $key->employee_name; ?></td>
										<td><?php echo $key->employee_personal_email; ?></td>
										<td><?php echo $key->employee_official_email; ?></td>
										<td><?php echo $key->employee_contact_number; ?></td>
										<td><?php echo $key->employee_date_of_birth; ?></td>
										<td><?php echo $key->employee_date_of_joining; ?></td>
										<td><?php echo $key->employee_years_of_experience ?></td>
										<td><?php echo $key->employee_address; ?></td>
										<td><?php echo $key->employee_designation; ?></td>
										<td><?php echo $key->employee_password; ?></td>

									</tr>

								<?php } ?>			
								
								</tbody>

							</table>	
							
						</div>
						
					</div>
					
				</div>				

			<?php } ?>
			
		</div>

	</div>
		
</body>
</html>