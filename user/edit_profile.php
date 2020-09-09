<?php
include("user_header.php");
error_reporting(E_PARSE);

if (isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}
$query = "SELECT * FROM new_user WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
// print_r($data);

?>
		<div class="col-md-12 border p-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary text-light px-4 py-2">Profile Update</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<form action="update.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Full Name</label>
									<input value="<?php echo $data['full_name'];?>" type="Text" name="full_name" placeholder="Full Name" class="form-control">
									</div>
								<div class="form-group">
									<label>Profile Pic</label>
									<input type="file" name="image" class="form-control">
								</div>
								<div class="text-danger">
									<?php
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
									?>
								</div>
								<!-- <div class="form-group">
									<label>Current Pic</label>
									<img src="user_image/<?php echo $data['image'];?>" height="100" width="100" />
								</div> -->
								<div class="form-group">
									<label>Username/Email</label>
									<input disabled="disabled" value="<?php echo $data['email'];?>" type="Text" name="email" placeholder="Username" class="form-control" >
								</div>
								
								<div class="form-group">
									<label>Gender</label>
									<input <?php if($data['gender']=="male") echo "checked='checked'"; ?> required value="male" type="radio" name="gender" />Male
									<input <?php if($data['gender']=="female") echo "checked='checked'" ; ?> required value="female" type="radio" name="gender" />Female
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address" required placeholder="change your Address"><?php echo $data['address'];?></textarea>
								</div>
								<div class="form-group">
									<label>Mobile</label>
									<input type="number" value="<?php echo $data['mobile'];?>" required name="mobile" placeholder="Change mobile no." class="form-control">
								</div>
								

						</div>
						<div class="card-footer">
							<input type="submit" value="Update" class="btn btn-success">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

