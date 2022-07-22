<?php
include '../connect.php';
session_start();
error_reporting(0);
if (! empty($_SESSION['logged_in'])) {
	# code...
	$uid = $_SESSION['id'];
    include '../connect.php';
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
            <!-- <li class="nav-item active">
              <a href="about.php" class="nav-link">Apply leave</a>
            </li>
            <li class="nav-item">
              <a href="viewleavestatus.php" class="nav-link">Leave Status</a>
            </li> -->
            <li class="nav-item">
              <a href="portfolio.php" class="nav-link">View Appointments</a>
            </li>
            <li class="nav-item">
              <a href="counsellingproceed.php" class="nav-link">Counselling Updation</a>
            </li>
            <!-- <li class="nav-item">
              <a href="contact.php" class="nav-link">Counselling Completion</a>
            </li> -->
            <li class="nav-item">
              <a href="counsellinghistory.php" class="nav-link">Counselling History</a>
            </li>
            <li>
                            <a href="../logout.php">Logout</a>
                        </li>
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
                <li class="breadcrumb-item active" aria-current="page">counselling completion</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Counselling Completion</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>
  <main>

<!-- Grids Info -->
                    <div class="outer-w3-agile mt-3">
                    <br><h3 class="tittle-w3-agileits mb-4" align="center"><b>Counselling Closing Details</b></h3>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User Details</th>
							                	<th>Id Proof</th>
                                <th>Booking Details</th>
                                <th>Counselling Status</th>
                                <!-- <th>View comments</th> -->
                                <th>Counselling Closing Date</th>
                                <!-- <th>Case Action</th> -->
							             	<th>Counselling Completion</th>

                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php


$sql="select * from bookdetails inner join assigncounsel on assigncounsel.bookid = bookdetails.bookid where assigncounsel.counsellorid='$re' and assigncounsel.status='Proceed'";
//and assigncase.status='Assigned'
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$id=$r['logid'];
$did=$r['bookid'];
$sql1="select * from tbl_reg where loginid=$id";
$res1=mysqli_query($con,$sql1);
$r1=mysqli_fetch_array($res1);
$if=$r1['state'];
$sql1s="select * from tbl_state where s_id=$if";
$res1s=mysqli_query($con,$sql1s);
$r1s=mysqli_fetch_array($res1s);
$iff=$r1['district'];
$sql1q="select * from tbl_district where d_id='$iff'";
$res1q=mysqli_query($con,$sql1q);
$r1q=mysqli_fetch_array($res1q);
 $sqe="select * from assigncounsel where bookid=$did";
$ree=mysqli_query($con,$sqe);
$k=mysqli_fetch_array($ree);

?>
<form action="updateclosedate.php" method="post">
<input type="Hidden" name="iddd" value="<?php echo $did ?>" >
<!-- <input type="hidden" name="cid" value="<?php echo $cid;?>"> -->
		<tr><td><?php echo $r1['name'];?><br />
        <?php echo $r1['address'];?><br /><?php echo $r1['email'];?></br><?php echo $r1['phone'];?><br>
        <?php echo $r1s['sname'];?><br />
		<?php echo $r1q['dname'];?><br /><?php echo $r1['dob'];?></td><td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td><td>
		<?php echo $r['message'];?><br />on <?php echo $r['fromdate'];?></td>
		
        		
										
				<td> <input name="status" value="<?php echo $k['status'];?>" readonly></td>
                <!-- <td> <?php echo $k['comments'];?></td> -->
                <span class="lnr lnr-user"></span>
<td><input type='date' name="closedate"   id="closedate" rows="7" cols="40" min="<?= date('Y-m-d');?>" required onChange="Valstat();"></td>

<span id="msgi1" style="color:red;"></span>
<script>		
function Valstat() 
{
    var val = document.getElementById('closedate').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill closedate";
		return false;
		}
	}
</script>
<!-- <td><a href="approvecomment.php?id=<?php echo $r1[9];?>&id=<?php echo $r[0]; ?>"style="border: none; color:green;"><i class="fa fa-check-square"></i></a>
                <a href="rejectcomment.php?id=<?php echo $r[0];?>"style="border: none; color:red;"><i class="fas fa-times"></i></a></td> -->
				<!-- <td><textarea name="stat" rows="7" cols="40" placeholder="Type your comment.."></textarea></td>  -->
				<td><input type="submit" name="complete" value="Counselling Complete" style="background-color:#FF99FF">
										</td>
										
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