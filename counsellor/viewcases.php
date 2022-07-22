<?php
include '../connect.php';
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
	$uid = $_SESSION['id'];
    include '../connect.php';
    $sq = mysqli_query($con,"SELECT * FROM `counsellors` where loginid='$uid'");
    while($rw=mysqli_fetch_array($sq)){
        $re = $rw['counselid'];
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
        <a href="index.php" class="navbar-brand">Counsellor<span class="text-primary">Page.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item active">
              <a href="about.php" class="nav-link">Apply leave</a>
            </li>
            <li class="nav-item">
              <a href="viewleavestatus.php" class="nav-link">Leave Status</a>
            </li>
            <li class="nav-item">
              <a href="portfolio.php" class="nav-link">View Appointments</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Update Status</a>
            </li>
            <li class="nav-item">
              <a href="editprofile.php" class="nav-link">Edit Profile</a>
            </li>
            <li class="nav-item">
              <a href="changepwd.php" class="nav-link">Change Password</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">view booking</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">view booking</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center"></h2>
            <!--// main-heading -->

          
    
            <!-- Grids Content -->
            <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">New Booking Details</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User Details</th>
								<th>Id Proof</th>
                                <th>Booking Details</th>
                                <th>Status</th>
								<th>Update Status</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php


$sql="select * from bookdetails inner join assigncounsel on assigncounsel.bookid = bookdetails.bookid where assigncounsel.counselid='$re'";
//and assigncounsel.status='Assigned'
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$id=$r['logid'];
$did=$r['bookid'];
$sql1="select * from tbl_reg where loginid=$id";
$res1=mysqli_query($con,$sql1);
$r1=mysqli_fetch_array($res1);
$sqe="select * from assigncounsel where bookid=$did";
$ree=mysqli_query($con,$sqe);
$k=mysqli_fetch_array($ree);

?>
<form action="updatestatus.php" method="post">
<input type="hidden" name="cid" value="<?php echo $cid;?>">
		<tr><td><?php echo $r1['name'];?><br />
        <?php echo $r1['address'];?><br /><?php echo $r1['email'];?></br><?php echo $r1['phone'];?>
		<?php echo $r1['district'];?><br /><?php echo $r1['dob'];?></td><td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td><td>
		
		<?php echo $r['message'];?><br />on <?php echo $r['fromdate'];?></td>
		
        		
										
				<td> <?php echo $k['status'];?></td>
				<td><textarea name="stat" rows="7" cols="40" placeholder="Type your status.."></textarea></td>
				<td><input type="submit" name="update" value="UPDATE" style="background-color:#FF99FF">
										</td>
									<input type="Hidden" name="iddd" value="<?php echo $did ?>" >	
		</form>		
                      <?php
}
?></tbody>
                    </table>
                </div>
                <!--// Grids Info -->
                

           
                                   
		     <?php
}
else
header('location:../login/login.php');
?>