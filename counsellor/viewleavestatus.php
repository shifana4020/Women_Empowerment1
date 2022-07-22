<?php
include '../connect.php';
session_start();
error_reporting(0);
if (! empty($_SESSION['logged_in'])) {
	# code...
	$uid = $_SESSION['id'];
  $sq = mysqli_query($con,"SELECT * FROM `counsellors` where loginid='$uid'");
  while($rw=mysqli_fetch_array($sq)){
      $re = $rw['counsellorid'];
      $name = $rw['name'];
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
          <div class="col-md-4 text-right d-none d-md-block">
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="" href="portfolio.php"><h1><b>Women Empowerment</b></h1><h3><b>Welcome</b> <b><?php echo $name?></b></h3></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">Apply leave</a>
            </li>
            <!-- <li class="nav-item">
              <a href="viewleavestatus.php" class="nav-link">Leave Status</a>
            </li> -->
            <li class="nav-item">
              <a href="portfolio.php" class="nav-link">View Appointments</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Update Status</a>
            </li>
            <li>
                            <a href="../logout.php">Logout</a>
                        </li>
            <!-- <li class="nav-item dropdown">
                    <a href="#homeSubme" data-toggle="collapse" aria-expanded="true">
                        <i class="fas fa-laptop"></i>
                       Counsellor Profile
                        <i class="fas fa-angle-down fa-pull-right"></i>
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
                    </li> -->
            <!-- <li class="nav-item">
              <a href="editprofile.php" class="nav-link">Edit Profile</a>
            </li>
            <li class="nav-item">
              <a href="changepwd.php" class="nav-link">Change Password</a>
            </li> -->
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(img/bg_image_2.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leave status</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Leave Status</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4"> Counsellors Leave</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
									   <th>
                               Leave details
                                    </th>
                                </th><th>
                                    Status 
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';
$sql="select * from leave_cc where loginid=$uid  and status='Accepted' & 'Rejected'";
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
// $id=$r['loginid'];
// $sql1="select * from counsellors where  logonid=$id";
// $res1=mysqli_query($con,$sql1);
?>
		<tr>
        <td><?php echo $r['type'];?><br><?php echo $r['leavedate'];?><br /><?php echo $r['reason'];?></td>

        		<td><?php echo $r['status'];?></td>
				</tr>
                      <?php
}
?>
				</tbody>
                    </table>
                </div>
                <!--// Grids Info -->
                

           
                                   
         
		   <?php
}
else
header('location:../login/login.php');
?>