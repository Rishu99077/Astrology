<?php
include("user_header.php");

$query = "SELECT category, question , ask_date_time FROM user_questions ORDER by ID LIMIT 10";
$result = mysqli_query($conn , $query);

// print_r($feed);
// exit();
?>

			<!-- Main content start -->

			
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Profile</h1>

					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<a href="edit_profile.php">
									<img src="img/avatars/<?php echo $data['image'];?>" height="128" width="128" /></a>
									<h5 class="card-title mb-0"><?php echo $data['full_name']; ?></h5>
									<div class="text-muted mb-2"><?php echo $data['mobile']; ?></div>

									<div>
										<a class="btn btn-primary btn-sm" href="edit_profile.php">Edit profile</a>
									</div>
								</div>
							</div>
						</div>
						

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Activities</h5>
								</div>
								<div class="card-body h-100">

									<div class="media">
										
										<div class="media-body">
											<table class="table table-responsive">
												<tr>
													<th>Category</th>
													<th>Questions</th>
													<th>Asking time</th>
												</tr>
													<?php
													while($row = $result->fetch_array())
													{
														$rows[] = $row;
													}
													foreach ($rows as $row) 
													{
													?>		
												<tr>
														<td><?php echo $row['category']; ?></td>
														<td><?php echo $row['question']; ?></td>
														<td><?php echo $row['ask_date_time']; ?></td>
												<?php
													}
												?>
												</tr>
											</table>
										</div>
									</div>
									
									<hr />
									<div class="media">
			
									<hr />
									<a href="#" class="btn btn-primary btn-block">Load more</a>
									</div>
							</div>
						</div>
					</div>

				</div>
			</main>
<!-- main content End -->
		
		</div>
	</div>

	</main>


</body>

</html>
