<?php
include '../connect.php';
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
	$uid = $_SESSION['id'];
	$sql = mysqli_query($con,"SELECT * from tbl_reg where loginid='$uid'");
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
					<!-- <div class="">
						<a class="navbar-brand" href="index.php"><h2><b>Women Empowerment<h3><b>Welcome</b><br><b><?php echo $name; ?></b></h3></a>
					</div> -->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-12" id="link-effect-12">
						<ul class="nav navbar-nav">
						<li class="active"><a href="userindex.php"><span>Home</span></a></li>
							<!-- <li><a href="reportcase.php"><span>Report Case</span></a></li> -->
							<li><a href="viewbill.php"><span>Case Bill</span></a></li>
							<li><a href="casehistory.php"><span>Case History</span></a></li>
							<li><a href="viewcases.php"><span>Approved Cases</span></a></li>
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
		<div class="container">
			<h3><span>Report a Crime</span> </h3>
			
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
						<form action="crimedetailsprocess.php" method="post" name="form9" enctype="multipart/form-data">
						<div>
						<div class="form-group row">
					 <span class="lnr lnr-user"></span>
                        <label>Select Category</label>
                    <select name="category" id="category" class="form-control" required onChange="Vallawdq();">
      <option value="">select</option>
      <?php 
      include '../connect.php';
      $result1 = mysqli_query($con, "SELECT * from crimecategory");
      while($row1=mysqli_fetch_array($result1)){
      ?>
      <option value="<?php echo $row1['crimeid'];?> "><?php echo $row1['category'];?></option>

   <?php } ?>
    </select>
	</div>
	<span id="msgl8" style="color:red;"></span>
	<script>
function Vallawdq()
{
 var val = document.getElementById('category').value;
    if(val==""){
	    document.getElementById('msgl8').innerHTML="** please select category";
		return false;
		}
    }
		</script>
						<!-- <span class="lnr lnr-user"></span>
							Enter Apply Date: <input type="date" name="applydate" id="applydate" min="<?= date('Y-m-d');?>" required onChange="vdateo();">
                   
					<span id="msgd" style="color:red;"></span>
<script>		
function vdateo() 
{
    var val = document.getElementById('applydate').value;
	 if(val=="")
	 {
	    document.getElementById('msgd').innerHTML="** please fill date";
		return false;
		}
	}
</script><br><br> -->
                            <span class="lnr lnr-user"></span>
							    Enter Crime date: <input type="date" name="crimedate" id="crimedate" max="<?= date('Y-m-d');?>" required onChange="vdate();">
                   
					<span id="msgd" style="color:red;"></span>
<script>		
function vdate() 
{
    var val = document.getElementById('crimedate').value;
	 if(val=="")
	 {
	    document.getElementById('msgd').innerHTML="** please fill date";
		return false;
		}
	}
</script>
							
							<span class="lnr lnr-user"></span>
							<textarea name="discription"  id="discription" placeholder="Type case description..." required onChange="Valiprg();"></textarea>
					<span id="msgi1" style="color:red;"></span>
<script>		
function Valiprg() 
{
    var val = document.getElementById('discription').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill description";
		return false;
		}
	}
</script>
                   
							
							
                    </div>

							<span class="lnr lnr-user"></span>
							  Upload id proof <input type="file" name="file" id="file" required onChange="return fileValid();">
							  
					 <script>
        function fileValid() {
            var fileInput = 
                document.getElementById('file');
              
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
<span class="lnr lnr-user"></span>
  Upload fir <input type="file" name="file1" id="file1" required onChange="return fileValid1();">
  
<script>
function fileValid1() {
var fileInput = 
document.getElementById('file1');

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
							<input type="submit" value="Submit Now">
						</form>
						<p>if you need a counseling</p>
						<a href="bookcouncellor.php">Book counsellor</a>
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