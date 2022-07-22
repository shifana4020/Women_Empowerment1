<?php
include '../connect.php';
session_start();
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

<!-- Form Examples area start-->
           
                         <div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-ctn">
										<h2>Change password</h2>
										<p><span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        
                        <form action="actpwd.php" method="post" name="f">
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">New Password</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
										<span class="lnr lnr-lock"></span>
                                            <input type="password" name="new" id="new" class="form-control input-sm" placeholder="New Password" required onChange="return Validp();">
                                        <span id="msg5" style="color:red;"></span>
<script>
function Validp() 
{
    var val = document.getElementById('new').value;
	 if(val==""){
	    document.getElementById('msg5').innerHTML="** please fill password";
		return false;
		}

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg5').innerHTML="Password should contain atleast characters,one special character and integers";
		
		     document.getElementById('new').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Confirm Password</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
										<span class="lnr lnr-lock"></span>
                                            <input type="password" name="con" id="con" class="form-control input-sm" placeholder="Confirm Password" required onChange="return check();">
                                        <span id="msg6" style="color:red;"></span>
										<script>
function check()
{
var pas1=document.getElementById("new");
							  var pas2=document.getElementById("con");
							
							  if(pas1.value=="")
	{
		document.getElementById('msg6').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg6').innerHTML="Please confirm password!!";
		pas2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg6').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg6').innerHTML=" "; 
	return true;
	
}
	</script>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button class="btn btn-success notika-btn-success" name="b">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </div></form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<?php
}
else
header('location:../login/login.php');
?>