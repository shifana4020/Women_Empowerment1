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
            <!-- <li class="nav-item active">
              <a href="about.php" class="nav-link">Apply leave</a>
            </li> -->
            <li class="nav-item">
              <a href="viewleavestatus.php" class="nav-link">Leave Status</a>
            </li>
            <li class="nav-item">
              <a href="portfolio.php" class="nav-link">View Appointments</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Update Status</a>
            </li>
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
            <!-- <li class="nav-item dropdown">
                    <a href="#homeSubme" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                       Lawyer Profile
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
                <li class="breadcrumb-item active" aria-current="page">Leave Request</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Leave Request</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
  <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Apply For Leave</h2>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="leave.php" method="post" class="form-contact" enctype="multipart/form-data">
              <div class="row">
          <div class="col-12 py-2">
          <span class="lnr lnr-lock"></span>
          <label for="Leave Type" class="fg-grey">Leave Type</label>
          <select class="form-control" name="type" id="type"  required onChange="Vals();">
					<option value="" disabled>select leave type</option>
          <option value="sick">Sick</option>
          <option value="casual">Casual</option>
					</select>
          <span id="msg8" style="color:red;"></span>
          <script>
 function Vals()
{
 var val = document.getElementById('leave').value;
    if(val==""){
	    document.getElementById('msg8').innerHTML="** please select leave type";
		return false;
		}
  }
		</script>
                </div>
                <div class="col-sm-6 py-2">
                <span class="lnr lnr-user"></span>
                  <label for="date" class="fg-grey">Leave date</label>
                  <input type="date" class="form-control" id="leavedate" name="leavedate" required onChange="vdate();">
                   
                   <span id="msgd" style="color:red;"></span>
         <script>		
         function vdate() 
         {
             var val = document.getElementById('leavedate').value;
            if(val=="")
            {
               document.getElementById('msgd').innerHTML="** please fill leave date";
             return false;
             }
            }
         </script>
                </div>
              <!--  <div class="col-sm-6 py-2">
                <span class="lnr lnr-user"></span>
                  <label for="date" class="fg-grey">To date</label>
                  <input type="date" class="form-control" id="todate" name="todate"  min="<?= date('Y-m-d');?>" required onChange="vdatee();">
                   
                   <span id="msgdd" style="color:red;"></span>
         <script>		
         function vdatee() 
         {
             var val = document.getElementById('todate').value;
            if(val=="")
            {
               document.getElementById('msgdd').innerHTML="** please fill  to date";
             return false;
             }
         </script>
                </div>-->
                <div class="col-12 py-2">
                <span class="lnr lnr-user"></span>
                  <label for="reason" class="fg-grey">Reason</label>
                  <textarea id="reason" name="reason" class="form-control" placeholder="Enter reason.." required onChange="Valiprg();"></textarea>
					<span id="msgi1" style="color:red;"></span>
<script>		
function Valiprg() 
{
    var val = document.getElementById('reason').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill reason";
		return false;
		}
  }
</script>
                </div>
                <div class="col-12 mt-3">
                <input type="submit" value="Submit Now">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

   
            </div>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>

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

</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>