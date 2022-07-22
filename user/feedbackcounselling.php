<?php
session_start();
error_reporting(0);
if (! empty($_SESSION['logged_in'])) {
	# code...
$id=$_SESSION['id'];
include '../connect.php';
$sql = mysqli_query($con,"SELECT * from tbl_reg where loginid='$id'");
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
							<li><a href="bookcouncellor.php"><span>Book Counsellor</span></a></li>
							<!-- <li><a href="notification.php"><span>Notification</span></a></li> -->
							<li><a href="viewbill2.php"><span>Counselling Bill</span></a></li>
							<li><a href="approvecounsellor.php"><span>Approved counseling</span></a></li>
							<li><a href="rejectcounsellor.php"><span>Rejected counseling</span></a></li>
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
<main>

<!-- Grids Info -->
<div class="outer-w3-agile mt-3">
<div class="mail">
                    <h4 class="tittle-w3-agileits mb-4">Counselling Feedback</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                             <!-- <th>Status</th> -->
							            	<th>feedback</th>
								            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php


$sql="select * from bookdetails where logid=$id and status='Assigned'";
$res1=mysqli_query($con,$sql);?>
				<!-- <table>
				<tr><td>date</td><br><td>time</td></br><td>Booking details</td><td>Status</td><td>Counsellor</td><td>feedback</td></tr> -->
<?php
//while($r=mysqli_fetch_array($res1))
//{
// $did=$r['bookid'];
// $sql1="select * from assigncounsel where bookid=$did";
// $res11=mysqli_query($con,$sql1);
// $j=mysqli_fetch_array($res11);
// $id=$r['logid'];
$did=$_GET['did'];
// $sql1="select * from tbl_reg where loginid=$id";
// $res1=mysqli_query($con,$sql1);
//$r1=mysqli_fetch_array($res1);
$if=$_GET['if'];
$sqe="select * from assigncounsel where bookid=$did and $if";
$ree=mysqli_query($con,$sqe);
while($k=mysqli_fetch_array($ree))
{
?>
<form action="updatefeedback.php?did=<?php echo $did ?>&&if=<?php echo $if ?>" method="post">
<input type="Hidden" name="iddd" value="<?php echo $did ?>" >	
<!-- <input type="hidden" name="cid" value="<?php echo $cid;?>"> -->
<tr>
<!-- <td> <?php echo $k['status'];?></td> -->
<span class="lnr lnr-user"></span>
<td><textarea name="feedback"   id="feedback" rows="7" cols="40" placeholder="Type your feedback.." required onChange="Valstat();"></textarea></td>
<span id="msgi1" style="color:red;"></span>
<script>		
function Valstat() 
{
    var val = document.getElementById('feedback').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill feedback";
		return false;
		}
	}
</script>
				<td><input type="submit" name="update" value="UPDATE" style="background-color:#FF99FF">
				<button type="button"><a href="approvecounsellor.php">Cancel</button>
										</td>
									
		</form>	
        <?php
}
?>	
        </tbody>
                    </table>
                </div>
                
	
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
			<div>-->
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