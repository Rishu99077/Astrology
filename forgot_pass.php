<?php
	include("conn.php");
	include("header.php");
?>
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
		color: #f14d0f;
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
					<h2>Forgot password ?</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-12 offset-sm-4" style="margin-top: 30px;">
					<form action="get_password.php" method="post" class="form form-signin animated shake"> 
						<div class="form-group">
							<label><h3>Your registered mobile Number</h3></label>
							<input type="text" name="for_mobile" class="form-control" placeholder="Enter here">
						</div>
						<center><button class="btn btn-success">Get link</button></center>
						<p>Create An Account ? <a class="popup-with-zoom-anim text-primary" href="#signup-dialog">SignUp</a></p>
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
				</div>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script>