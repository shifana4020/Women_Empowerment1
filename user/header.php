<?php
@session_start();
include '../connect.php';
$id=$_SESSION['id'];
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
							<li><a href="reportcase.php"><span>Case Details</span></a></li>
							<li><a href="bookcouncellor.php"><span>Counselling Details</span></a></li>
							<li><a href="viewawarenessprograms.php"><span>Awareness programs</span></a></li>
								<li><a href="viewrights.php"><span>Rights</span></a></li>
							<!--<li class="active"><a href="userindex.php"><span>Home</span></a></li>
							<li><a href="reportcase.php"><span>Report Case</span></a></li>
							<li><a href="viewcases.php"><span>Approved Cases</span></a></li>
							<li><a href="rejectcase.php"><span>Rejected Cases</span></a></li>-->
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
		<!-- banner -->
			