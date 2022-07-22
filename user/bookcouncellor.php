<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
include '../connect.php';
$uid = $_SESSION['id'];
	$sql = mysqli_query($con,"SELECT * from tbl_reg where loginid='$uid'");
    while($row=mysqli_fetch_array($sql)){
  $name = $row['name'];
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Women Empowerment</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Privatio Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="userindex.php"><img src="" class="logo" style=""></a>
					<div class="brand-name">
					<h2 style="margin-top: 10px;font-family:'Montserrat'; font-weight:600;"><b>Women Empowerment</b></h2>
						<h3><b>Welcome...</b><b><?php echo $name; ?></b></h3>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-12" id="link-effect-12">
						<ul class="nav navbar-nav">
							<li class="active"><a href="userindex.php"><span>Home</span></a></li>
							<!-- <li><a href="bookcouncellor.php"><span>Book Counsellor</span></a></li> -->
							<!-- <li><a href="notification.php"><span>Notification</span></a></li> -->
							<li><a href="viewbill2.php"><span>Counselling Bill</span></a></li>
							<li><a href="approvecounsellor.php"><span>Approved counseling</span></a></li>
							<li><a href="rejectcounsellor.php"><span>Rejected counseling</span></a></li>
							<li><a href="counsellinghistory.php"><span>Counseling History</span></a></li>
								<!--<li><a href="viewawarenessprograms.php"><span>Awareness programs</span></a></li>
								<li><a href="viewrights.php"><span>Rights</span></a></li>-->
							<!--<li><a href="../logout.php"><span>Logout</span></a></li>-->
							<li>
								<a href="#homeSubbbmm" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        My Account
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubbbmm">
   

								<li><a href="editprofile.php"><span>My Profile</span></a></li>
								<li><a href="changepassword.php"><span>Change Password</span></a></li>
							    <li><a href="../logout.php"><span>Logout</span></a></li>
								</ul>
                                </li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
<!-- header -->
<!-- mail -->
<!-- <div class="banner jarallax">
		<div class="agileinfo-dot"> -->
			<!-- <div class="wthree-heading" style=color:white;>
                <br>
				<h2>Book Counsellor</h2>
                <br>
			</div>
		</div>
	</div> -->
	<!-- //banner -->
	<!-- contact -->
	<!-- <br> -->
	<!-- <div style="width:600px; background-color:white; color:black; border:5px;align:center;height:400px">
		<div class="container">
			<div class="agile-contact-form">
				
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3></h3>
					</div>
					<div class="agileinfo-contact-form-grid"> -->
					<div class="mail">
		<div class="container">
			<h3><span>Book Counsellor</span> </h3>
			
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
						<form action="slotbookingprocess.php" method="post" enctype="multipart/form-data">
							 <div class="form-group row">
					 <span class="lnr lnr-user"></span>
                        <label>Enter specialization</label>
                    <select name="specialization" id="specialization" class="form-control" required onChange="Vallawdq();">
      <option value="">select</option>
      <?php 
      include '../connect.php';
      $result1 = mysqli_query($con, "SELECT * from specification_tbl");
      while($row1=mysqli_fetch_array($result1)){
      ?>
      <option value="<?php echo $row1['spec_id'];?> "><?php echo $row1['category'];?></option>

   <?php } ?>
    </select>
	</div>
	<span id="msgl8" style="color:red;"></span>
	<script>
function Vallawdq()
{
 var val = document.getElementById('specialization').value;
    if(val==""){
	    document.getElementById('msgl8').innerHTML="** please select specialization";
		return false;
		}
    }
		</script>
                                    <!-- <label class="col-form-label col-md-4">Booking Date:</label>
                                    <div class="col-md-10">
									<span class="lnr lnr-user"></span>
                                <input type="date" class="form-control" style="font-size: 20px"  id="fromdate" name="fromdate" min="<?= date('Y-m-d');?>" required onChange="vdate();">
                                    </div>
									<span id="msgd" style="color:red;"></span>
<script>		
function vdate() 
{
    var val = document.getElementById('fromdate').value;
	 if(val=="")
	 {
	    document.getElementById('msgd').innerHTML="** please fill date";
		return false;
		}
	}
</script> -->
                                
                                               <!--<div class="form-group row">
                                    <label class="col-form-label col-md-4">Booking Time:</label>
                                    <div class="col-md-10">
									<span class="lnr lnr-user"></span>
                                        <input type="time" class="form-control" style="font-size: 20px" required="true" name="time" id="time" required onChange="vdatee();">
                                    </div>
									<span id="msgdd" style="color:red;"></span>
<script>		
function vdatee() 
{
    var val = document.getElementById('time').value;
	 if(val=="")
	 {
	    document.getElementById('msgdd').innerHTML="** please fill time";
		return false;
		}
</script>
                                </div>-->
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Upload Id-Proof</label>
                                    <div class="col-md-10">
									<span class="lnr lnr-user"></span>
                                        <input type="file" class="form-control" style="font-size: 20px" name="idproof" id="idproof" required onChange="return fileValid();">
                                    </div>
									<script>
        function fileValid() {
            var fileInput = 
                document.getElementById('idproof');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
                                </div>
                                                 <div class="form-group row">
                                    <label class="col-form-label col-md-4">Message</label>
                                    <div class="col-md-10">
									<span class="lnr lnr-user"></span>
                                        <textarea  class="form-control"  required="true" name="message" id="message" style="font-size: 20px" placeholder="Type message..." required onChange="Valiprg();"></textarea> 
                                    </div>
									<span id="msgi1" style="color:red;"></span>
<script>		
function Valiprg() 
{
    var val = document.getElementById('message').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill message";
		return false;
		}
	}
</script>
                                                </div>
                                                <div>    
												<input type="submit" value="Book Slot">
                                                </div>
                                            </form>					 
                     </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
			<div>
				<div class="footer-bottom-left">
					<p>&copy 2022 Women Empowerment. All rights reserved |</p>
				</div>
				<!--<div class="social_icons">
					<a href="#" class="icon icon-cube facebook"></a>
					<a href="#" class="icon icon-cube rss"></a>
					<a href="#" class="icon icon-cube instagram"></a>
					<a href="#" class="icon icon-cube t"></a>
					<div class="clearfix"> </div>
				</div>-->
				<div class="clearfix" > </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>