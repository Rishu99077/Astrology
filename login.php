<?php
	include("conn.php");
	include("header.php");
?>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>
function myFunctionPass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style>
	.ast_pagetitle{
	float: left;
	width: 100%;
	min-height: 700px;
	background-color: #272727;
	position:relative;
	background-attachment:fixed;
	background-size: cover;
	color:#ffffff;
	padding:200px 0px 100px 0px;
	background-image: url(images/content/login.jpg);
    background-position: center center;
	background-repeat: no-repeat;
	text-align:center;
	}
	.form .form-group h3
	{
		color: #ffffff;
	}
	.form
	{
		background-color: #7c497a;
		border: 1px solid black;
		padding: 30px;
		margin-bottom: 20px;
	}
	.form p
	{
		margin-top: 10px;
	}
	.font-weight
	{
		font-weight: bold;
		font-size: medium;
		color: #f95f5c;
	}
</style>
<!--Breadcrumb start-->
<?php error_reporting(E_ERROR | E_PARSE);?>
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title" style="margin-top: -55px;">
					<h2>Login page</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-12 offset-sm-4" style="margin-top: 30px;">
					<form action="save_login.php" method="post" class="form form-signin animated shake"> 
						<div class="form-group">
							<label><h3>Username</h3></label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-user text-primary"></i></span>
								</div>
								<input type="text" name="email" class="form-control" placeholder="Enter Username">
							</div>
						</div>
						<div class="form-group">
							<label><h3>Password</h3></label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-key text-primary"></i></span>
								</div>
								<input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
								<div class="input-group-addon" onclick="myFunctionPass()">
									<span class="input-group-text"><i class="fa fa-eye text-primary"></i></span>
								</div>
							</div>
						</div>
						<center><button class="btn btn-success">LOGIN</button></center>
						<p>Create An Account ? <a class="text-primary" href="sign.php">SignUp</a></p>
						<div class="text-center font-weight">
							<?php
							if(isset($_SESSION['msg']))
							{
								echo $_SESSION['msg'];
								unset($_SESSION['msg']); 
							}
							?>
						</div>
					</form>
					<div>
						<a href="forgot_pass.php"><button class="btn btn-warning">Forgot password ?</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->