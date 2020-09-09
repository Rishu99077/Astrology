<?php
include("../conn.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
  header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


  <link href="css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


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

<body id="page-top">
  <div class="wrapper">
    <nav id="sidebar" class="sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
            <img src="img/avatars/lock.jpg" class="avatar img-fluid rounded mr-1"/>
              <span class="align-middle">Admin Panel</span>
          
            </a>

        <ul class="sidebar-nav">
  
          <li class="sidebar-item">
            <a class="sidebar-link" href="register_customer.php">
                    <!-- <i class="align-middle" data-feather="message-square"></i> -->
                    <i class="fas fa-comment-dots text-primary align-middle"></i>
                      <span class="align-middle heading">Registered customers</span>
                  </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="cust_question.php">
                      <!-- <i class="align-middle" data-feather="list"></i> -->
                      <i class="fa fa-table text-primary align-middle"></i>
                      <span class="align-middle heading">Customer's question</span>
                  </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="cust_feed.php">
                      <!-- <i class="align-middle" data-feather="help-circle"></i>  -->
                      <i class="fas fa-question text-primary align-middle"></i>
                      <span class="align-middle heading">Customer's Feedback</span>
                  </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="admin_logout.php">
                      <!-- <i class="align-middle" data-feather="power"></i>  -->
                      <i class="fas fa-sign-out-alt text-primary align-middle"></i>
                      <span class="align-middle heading">Logout</span>
                  </a>
          </li>

        </ul>

        
      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light bg-primary">
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

             <span class="text-dark">Setting</span>
                 </a>
              <div class="dropdown-menu dropdown-menu-right">
             <!--    <a class="dropdown-item" href="user_profile.php"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="user_setting.php"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a> -->
                <!-- <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a -->
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="admin_logout.php">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- main content start -->
      <!-- Main content End -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
