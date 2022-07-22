<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Women Empowerment</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Privatio Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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


<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
$id=$_SESSION['id'];
include '../connect.php';
$q="select * from tbl_reg where loginid=$id";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
$name = $row['name'];
?>
 <!-- <!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color:#4B8F56;  
}  
.container {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: white;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style> 
<style> form{
  padding: 150px 170px;
}</style> 
</head>   -->
<script>		
function Validate() 
{
    var val = document.getElementById('name').value;
	 if(val==""){
	    document.getElementById('msg1').innerHTML="** please fill name";
		return false;
		}
    if (!val.match(/^[A-Z][a-z\ ]{3,}$/))
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets!!";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
<script>
function Validname() 
{
    var val = document.getElementById('address').value;
	 if(val==""){
	    document.getElementById('msg2').innerHTML="** please fill address";
		return false;
		}
  }
</script>
<script>
function Validat() 
{
    var val = document.getElementById('phone').value;
    if(val==""){
	    document.getElementById('msg4').innerHTML="** please fill mobile number";
		return false;
		}
    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phone').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}
</script>
<script>
function Vall()
{
 var val = document.getElementById('gender').value;
    if(val==""){
	    document.getElementById('msg7').innerHTML="** please select gender";
		return false;
		}
  }
		</script>
		<!-- <script>
 function Vals()
{
 var val = document.getElementById('district').value;
    if(val==""){
	    document.getElementById('msg8').innerHTML="** please select district";
		return false;
		}
  }
		</script> -->
    </head>
    <body>
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

<form id="form1" name="form1" method="post" action="editprofileprocess.php">
  <center>
<div class="container"> 
<center>  <br><br><br><h1><b>EDIT PROFILE</b></h1> <br><br></center>  
<table width="600px">
  <tr>
    <td>name:</td>
    <td>
    <span class="lnr lnr-user"></span>
        <input type="text" name="name" id="name" value="<?php echo $row['name'];?>" required onChange="Validate();" readonly/>
        <span id="msg1" style="color:red;"></span>
    </td>
  </tr>
   <tr>
    <td>gender:</td>
    <td>
	<?php
	if($row['gender']=="male")
	{
	?>
       <span class="lnr lnr-user"></span>
        <input type="radio" name="gender" value="male" checked="checked" id="gender" required onChange="Vall();" disabled='disabled'/>male
		<input type="radio" name="gender" value="female" disabled='disabled'/>female
		<span id="msg7" style="color:red;"></span>
       <?php
	   }
	else
	{
	?>
	  <input type="radio" name="gender" value="male" disabled='disabled'/>male
		<input type="radio" name="gender" value="female" checked="checked" disabled='disabled'/>female
		<?php
		}
		?>
    </td>
  </tr>

   <tr>
    <td>address:</td>
    <td>
    <span class="lnr lnr-user"></span>
        <input type="text" name="address"  id="address" value="<?php echo $row['address'];?>" required onChange="Validname();"/>
        <span id="msg2" style="color:red;"></span>
    
    </td>
  </tr><br>
   <!-- <tr>
    <td>district:</td>
    <td>
    <span class="lnr lnr-user"></span>
     <select name="district" id="district"  required onChange="Vals();">
          <option value="<?php echo $row['district'];?>"><?php echo $row['district'];?></option>
          <option value="kottayam">kottayam </option>
          <option value="ernakulam">ernakulam</option>
          <option value="thissure">thrissure</option>
          <option value="kollam">kollam</option>
          <option value="pathanamthitta">pathanamthitta </option>
          <option value="trivandrum">trivandrum</option>
          <option value="alappuzha">alappuzha</option>
          <option value="palakkad">palakkad </option>
          <option value="vayanad">vayanad</option>
          <option value="kasargode">kasargode</option>
          <option value="kozhikkod">kozhikkod</option>
          <option value="malappuram">malappuram </option>
          <option value="iduki">iduki</option>
          <option value="kannur">kannur</option>
        </select>
        <span id="msg8" style="color:red;"></span>
    
    </td>
  </tr> -->
   <tr>
    <td>DOB:</td>
    <td>
    <span class="lnr lnr-user"></span>
        <input type="date" name="dob" id="dob" value="<?php echo $row['dob'];?>" max="<?= date('Y-m-d');?>" required onChange="vdate();" readonly/>
		            <span id="msg9" style="color:red;"></span>
					<script>		
function vdate() 
{
    var val = document.getElementById('dob').value;
	 if(val=="")
	 {
	    document.getElementById('msg9').innerHTML="** please fill date of birth";
		return false;
		}
  }
</script>
       
    
    </td>
  </tr><br>
   <tr>
    <td>email:</td>
    <td>
     
        <input type="text" name="email" value="<?php echo $row['email'];?>" readonly />
       
    
    </td>
  </tr><br>
   <tr>
    <td>phone number:</td>
    <td>
    <span class="lnr lnr-user"></span>
        <input type="text" name="phone" id="phone" value="<?php echo $row['phone'];?>" required onChange="Validat();"/>
        <span id="msg4" style="color:red;"></span>
    
    </td>
  </tr><br>
  <tr>
    <td>&nbsp;</td>
    <td>
    <div class="">
        <input type="submit" name="Submit" value="update" />
        <button type="button"  data-dismiss="modal" ><a href="userindex.php">Cancel</button>
</div>
</center>
    </td>
  </tr>
</table>
</div>
</form>
</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>
