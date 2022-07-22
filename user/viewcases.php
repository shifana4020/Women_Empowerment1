<?php
session_start();
error_reporting(0);
if (! empty($_SESSION['logged_in'])) {
	# code...
include '../connect.php';
$id=$_SESSION['id'];
$sql = mysqli_query($con,"SELECT * from tbl_reg where loginid='$id'");
while($row=mysqli_fetch_array($sql)){
  $name = $row['name'];
}
?>
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
							<li><a href="reportcase.php"><span>Report Case</span></a></li>
							<li><a href="viewbill.php"><span>Case Bill</span></a></li>
							<li><a href="casehistory.php"><span>Case History</span></a></li>
							<!-- <li><a href="viewcases.php"><span>Approved Cases</span></a></li> -->
							<li><a href="rejectcase.php"><span>Rejected Cases</span></a></li>
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
	<div class="mail">
			<h3><span>Approved Cases</span> </h3>
			<div class="mail-grids">
				<div class="table table-bordered table-striped">
					<div class="mail-grid-left1">
					<?php
include '../connect.php';
 $sql="select * from crimedetails where logid='$id' and status='Assigned'";
$res1=mysqli_query($con,$sql);?>
				<table>
				<tr>
				<th>Apply date</th>	
				<th>Crime date</th>
				<th>Case details</th>
				<th>Case Status</th>
				<th>Comments From Lawyer</th>
				    <th>Comment Date</th>
				<th>Lawyer Details</th>
				<th>Feedback</th></tr>
<?php
while($r=mysqli_fetch_array($res1))
{
$did=$r['detailid'];
$sql1="select * from assigncase where detailid=$did";
$res11=mysqli_query($con,$sql1);
$j=mysqli_fetch_array($res11);
$if=$j['aid'];


?>

<tr>
<td><?php echo $r['applydate'];?></td>
<td><?php echo $r['crimedate'];?></td><td><textarea  disabled="disabled" ><?php echo $r['discription'];?></textarea></td>
<td><textarea disabled="disabled"><?php echo $j['status'];?></textarea></td><td><textarea disabled="disabled"><?php echo $j['comments'];?></textarea></td>
<td><textarea disabled="disabled"><?php echo $j['cmtdate'];?></textarea></td><td><a href="viewlprofile.php?did=<?php echo $r['detailid'];?>">Lawyer Profile</a></td>
<td><a href="feedbackcase.php?did=<?php echo $did; ?>&&if=<?php echo $if ?>">feedback</a></td></tr>
<?php
}
?></table>
					</div>
				</div>
				<!-- <div class="col-md-6 mail-grid-right">
					<div class="mail-grid-right1">
						<img src="images/s.jpg" width="400" height="350">
					</div> -->
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
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
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
				<div class="clearfix"> </div>
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