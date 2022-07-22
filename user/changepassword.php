<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
include("header.php");
?>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3><span>Change password</span> </h3>
			
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
						<form action="changepasswordprocess.php" method="post" name="form21" enctype="multipart/form-data">
						<div>
                            <span class="lnr lnr-lock"></span>
							Enter password<input type="text"  name="pass" id="pass" placeholder="Enter new password" required onChange="return Validp();">
						<span id="msg5" style="color:red;"></span>
							</div>
							
							<span class="lnr lnr-lock"></span>
							Confirm password<input type="text" name="cpass" id="cpass" placeholder="Enter confirm password" required onChange="return check();">
						<span id="msg6" style="color:red;"></span>
						
						  <script>
function Validp() 
{
    var val = document.getElementById('pass').value;
	 if(val==""){
	    document.getElementById('msg5').innerHTML="** please fill password";
		return false;
		}

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/)) 
    {
        document.getElementById('msg5').innerHTML="Password should contain atleast 6 characters";
		
		     document.getElementById('pass').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>
<script>
function check()
{
var pas1=document.getElementById("pass");
							  var pas2=document.getElementById("cpass");
							
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
		<input type="submit" name="b" value="Submit Now">
						</form>

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
				<div class="social_icons">
					<a href="#" class="icon icon-cube facebook"></a>
					<a href="#" class="icon icon-cube rss"></a>
					<a href="#" class="icon icon-cube instagram"></a>
					<a href="#" class="icon icon-cube t"></a>
					<div class="clearfix"> </div>
				</div>
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