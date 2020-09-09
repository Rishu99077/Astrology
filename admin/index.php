<?php
include("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta name="description" content="Astrology">
		<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
		<meta name="author" content="hsoft" >
		<meta name="MobileOptimized" content="320">
		<!--Srart Style -->
		<link rel="stylesheet" type="text/css" href="../css/animate.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="../css/fonts.css">
		<link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="../css/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="../css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<!-- Favicon Link -->
		<link rel="shortcut icon" type="image/jpg" href="../images/content/guru1.jpg">
		<style>
			.backimage
			{
				background-image: url(../images/content/bk.jpeg);
				background-repeat: no-repeat;
				background-size: 100% 800px;
			}
			.admin
			{
				margin-top: 150px;
				border: 1px solid black;
				border-radius: 3px 2px;
			}
			form
			{
				margin: 15px;
			}
		</style>
</head>
<body class="backimage">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 admin">
					<form action="admin_auth.php" method="post" class="form-signin animated shake">
						<div class="form-group">
							<label>Username</label>
							<input type="text" placeholder="Admin Username" name="admin_name" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Password" name="admin_pass" class="form-control">
						</div>
						<div class="ast_login_data">
							<label class="tp_custom_check" for="remember_me">Remember me <input type="checkbox" name="ast_remember_me" value="yes" id="ast_remember_me"><span class="checkmark"></span>
							</label>
						</div>
						<center><button type="submit" value="login" class="ast_btn">Login</button></center>
					</form>
					<div class="text-danger text-center">
						<h5 class="text-danger">
							<?php
							if(isset($_SESSION['msg']))
							{
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
							?>	
						</h5>
					</div>
				</div>
			</div>
		</div>
</body>
</html>