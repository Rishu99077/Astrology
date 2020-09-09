<?php
include("../conn.php");
if(isset($_SESSION['id']))
{

   $id= $_SESSION['id'];

} 
if(! isset($_SESSION['is_user_logged_in']))
{
  header("Location: ../login.php");
}

$query = "SELECT * FROM new_user WHERE id ='$id'";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">


	<title>User Panel</title>

	<link href="css/app.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="Astrology">
<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
<meta name="author" content="hsoft" >
<meta name="MobileOptimized" content="320">

<link rel="stylesheet" type="text/css" href="../css/style.css">
<!-- Favicon Link -->
<link rel="shortcut icon" type="image/png" href="../images/header/favicon.png">
	<script src="js/vendor.js"></script>
	<script src="js/app.js"></script>
	<style>
		.sidebar-nav .sidebar-item a:hover
		{
			background-color: black;
		}
		h2 .align-middle
		{
			font-weight: 600;
			color: blue;
		}
		.heading
		{
			color: honeydew;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar" style="background-color:#ff700b;">
				<a class="sidebar-brand" href="index.php">
					<img src="img/avatars/<?php echo $data['image']; ?>" class="avatar img-fluid rounded mr-1"/>
		          <span class="align-middle">User Panel</span>
		          <span><i class="fas fa-spinner fa-2x fa-pulse"></i></span>
		          <br>
		          <h2><span class="align-middle">स्वागत हे <?php echo $data['full_name']; ?></span></h2>
        		</a>

				<ul class="sidebar-nav" style="color: #ff700b;">
					<li class="sidebar-item">
						<a class="sidebar-link" href="user_profile.php">
            			  <!-- <i class="align-middle" data-feather="user" class="text-primary"></i> -->
            			  <i class="fa fa-user text-primary align-middle"></i>
            			   <span class="align-middle heading">User Profile / प्रोफ़ाइल</span>
            			</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="my_rashi.php">
	              			<!-- <i class="align-middle" data-feather="help-circle"></i>  -->
	              			<i class="fas fa-question text-primary align-middle"></i>
	              			<span class="align-middle heading">Rashi / मेरी राशी</span>
			            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="user_feedback.php">
             			 	<!-- <i class="align-middle" data-feather="message-square"></i> -->
             			 	<i class="fas fa-comment-dots text-primary align-middle"></i>
             			  	<span class="align-middle heading">Feedback / सुझाव</span>
           				</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="user_table.php">
              				<!-- <i class="align-middle" data-feather="list"></i> -->
              				<i class="fa fa-table text-primary align-middle"></i>
              			 	<span class="align-middle heading">Table</span>
            			</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="user_question.php">
	              			<!-- <i class="align-middle" data-feather="help-circle"></i>  -->
	              			<i class="fa fa-quora text-primary align-middle"></i>
	              			<span class="align-middle heading">Ask A Question / प्रश्न पूछें</span>
			            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="user_answer.php">
	              			<!-- <i class="align-middle" data-feather="help-circle"></i>  -->
	              			<i class="fa fa-odnoklassniki text-primary align-middle"></i>
	              			<span class="align-middle heading">My Answer</span>
			            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="user_logout.php">
              				<!-- <i class="align-middle" data-feather="power"></i>  -->
              				<i class="fas fa-sign-out-alt text-primary align-middle"></i>
              				<span class="align-middle heading">Logout / लॉग आउट</span>
            			</a>
					</li>

				</ul>

				
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-warning" style="background-color:#222e3c;">
				<a class="sidebar-toggle d-flex">
          			<i class="hamburger align-self-center"></i>
       			</a>

				<form class="form-inline d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<div class="input-group-append">
							<button class="btn" type="button">
                				<i class="align-middle" data-feather="search"></i>
              				</button>
						</div>
					</div>
				</form>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">	
					<li class="nav-item dropdown">
						<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
               				 <i class="align-middle" data-feather="settings"></i>
              			</a>

						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
				            <img src="img/avatars/<?php echo $data['image']; ?>" class="avatar img-fluid rounded mr-1"/> <span class="text-dark">User</span>
				         </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="user_profile.php"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="user_setting.php"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
								<!-- <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a -->
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="user_logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Slider -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" style="height: 250px;">
			    <div class="carousel-item active">
			      <img src="../images/content/baby.png" height="250" width="100%">
				      <div class="carousel-caption d-none d-md-block">
					    <h3 class="text-warning">BABY NAMES</h3>
					    <h4 class="text-primary">Janam ke adhaar par naam</h4>
					  </div>
			    </div>
			     <div class="carousel-item">
			      <img src="../images/content/kundli.png" height="250" width="100%">
				      <div class="carousel-caption d-none d-md-block">
					    <h3 class="text-warning">Kundli</h3>
					    <h4 class="text-primary">Jane kundli se sambandit jankari</h4>
					  </div>
			    </div>
			     <div class="carousel-item">
			      <img src="../images/content/blackmagic.jpg" height="250" width="100%">
				      <div class="carousel-caption d-none d-md-block">
					    <h3 class="text-warning">Black magic</h3>
					    <h4 class="text-primary">What is black magic ? How does it affect you..</h4>
					  </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>		