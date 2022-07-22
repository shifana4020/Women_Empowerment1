<?php
session_start();
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
					<div class="">
					<a href="userindex.php"><h2><b>Women Empowerment</b></h2><h3><b>Welcome</b><br><b><?php echo $name; ?></b></h3></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-12" id="link-effect-12">
						<ul class="nav navbar-nav">
						<li class="active"><a href="userindex.php"><span>Home</span></a></li>
							<li><a href="bookcouncellor.php"><span>Counsellor Booking</span></a></li>
                            <li><a href="notification.php"><span>Notification</span></a></li>
							<li><a href="viewbill2.php"><span>Counselling Bill</span></a></li>
							<li><a href="approvecounsellor.php"><span>Approved counseling</span></a></li>
							<li><a href="rejectcounsellor.php"><span>Rejected counseling</span></a></li>
							<li><a href="counsellinghistory.php"><span>Counseling History</span></a></li>
								<!--<li><a href="viewawarenessprograms.php"><span>Awareness programs</span></a></li>
								<li><a href="viewrights.php"><span>Rights</span></a></li>-->
							<!--<li><a href="../logout.php"><span>Logout</span></a></li>-->
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3><span>View Booking details</span> </h3>
			
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
					<?php
include '../connect.php';
 $sql="select * from bookdetails where logid=$id and status='change date'";
$res1=mysqli_query($con,$sql);?>
				<table>
				<tr><th>Date</th></br>
				<th>Booking details</th>
				<th>Status</th></tr>
<?php
while($r=mysqli_fetch_array($res1))
{
?>

<tr>
<td><?php echo $r['fromdate'];?></td><br><td><textarea  disabled="disabled" ><?php echo $r['message'];?></textarea></td>
<td><textarea disabled="disabled"><?php echo $r['status'];?></textarea></td><td><a href="updatedate.php?did=<?php echo $r['bookid'];?>">update date</a></tr>
<?php
}
?></table>
					</div>
				</div>
				<div class="col-md-6 mail-grid-right">
					<div class="mail-grid-right1">
						<img src="images/s.jpg" width="400" height="350">
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