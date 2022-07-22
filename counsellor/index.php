<?php
include '../connect.php';
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
	$uid = $_SESSION['id'];
	$sql = mysqli_query($con,"SELECT * from counsellors where loginid='$uid'");
    while($row=mysqli_fetch_array($sql)){
  $name = $row['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>WOMEN EMPOWERMENT</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  
  <link rel="stylesheet" href="css/maicons.css">

  <link rel="stylesheet" href="vendor/animate/animate.css">

  <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="" href="index.php"><h1><b>Women Empowerment</b></h1><h3><b>Welcome</b> <b><?php echo $name?></b></h3></a>
        <!-- <a href="index.php" class="navbar-brand">Counsellor<span class="text-primary">Page.</span></a> -->

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">Apply leave</a>
            </li>
            <li class="nav-item">
              <a href="viewleavestatus.php" class="nav-link">Leave Status</a>
            </li>
            <li class="nav-item">
              <a href="portfolio.php" class="nav-link">View Appointments</a>
            </li>
            <!-- <li class="nav-item">
              <a href="contact.php" class="nav-link">Update Status</a>
            </li> -->
            <li class="nav-item dropdown">
                    <a href="#homeSubme" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                       Counsellor Profile
                        <!-- <i class="fas fa-angle-down fa-pull-right"></i> -->
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubme">
                        <li>
                            <a href="editprofile.php">My Profile</a>
                        </li>
                        <li>
                            <a href="changepwd.php">Change Password</a>
                        </li>  
                        <li>
                            <a href="../logout.php">Logout</a>
                        </li>
                    </ul>
                    </li>
            <!-- <li class="nav-item">
              <a href="editprofile.php" class="nav-link">Edit Profile</a>
            </li>
            <li class="nav-item">
              <a href="changepwd.php" class="nav-link">Change Password</a>
            </li>
            <li><a href="../logout.php"><i class="notika-icon notika-support"></i>Logout</a>
                        </li> -->
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="img/bg_image_1.jpg" alt="">
            <div class="img-caption">
              <div class="subhead">We're believe in your counseling</div>
              <h1 class="mb-4">Welcome Counsellor</h1>
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="img/bg_image_3.jpg" alt="">
            <div class="img-caption">
              <div class="subhead"></div>
              <h1 class="mb-4">Welcome to our counseling world</h1>
            </div>
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
  </header>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
      </div>
      <hr>
      <div class="row mt-4">
        <div class="col-md-6">
          <p>Copyright 2022. This template designed by MACode ID</p>
        </div>
        <div class="col-md-6 text-right">
        </div>
      </div>
    </div>
  </footer>

  
<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="vendor/wow/wow.min.js"></script>

<script src="vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="vendor/isotope/isotope.pkgd.min.js"></script>

<script src="js/google-maps.js"></script>

<script src="js/theme.js"></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>