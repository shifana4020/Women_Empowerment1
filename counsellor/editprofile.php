<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
$id=$_SESSION['id'];
include '../connect.php';
$q="select * from counsellors where loginid=$id";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
$name = $row['name'];
?>
 <!DOCTYPE html>  
<html>  
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

<meta name="viewport" content="width=device-width, initial-scale=1">  
<header>
<div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="" href="index.php"><h1><b>Women Empowerment</b></h1><h3><b>Welcome</b> <b><?php echo $name?></b></h3></a>
        <!-- <a href="index.php" class="navbar-brand">Counsellor<span class="text-primary">Page.</span></a> -->

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">Apply leave</a>
            </li>
            <li class="nav-item">
              <a href="viewleavestatus.php" class="nav-link">Leave Status</a>
            </li>
            <li class="nav-item">
              <a href="portfolio.php" class="nav-link">View Appointments</a>
            </li>
            <!-- <li class="nav-item">
              <a href="contact.php" class="nav-link">Update Status</a>
            </li> -->
            <!-- <li class="nav-item dropdown">
                    <a href="#homeSubme" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                       Counsellor Profile
                         <i class="fas fa-angle-down fa-pull-right"></i> -->
                    <!-- </a>
                    <ul class="collapse list-unstyled" id="homeSubme">
                        <li>
                            <a href="editprofile.php">My Profile</a>
                        </li>
                        <li>
                            <a href="changepwd.php">Change Password</a>
                        </li>   -->
                        <li>
                            <a href="../logout.php">Logout</a>
                        </li>
                    
                    
            <!-- <li class="nav-item">
              <a href="editprofile.php" class="nav-link">Edit Profile</a>
            </li>
            <li class="nav-item">
              <a href="changepwd.php" class="nav-link">Change Password</a>
            </li>
            <li><a href="../logout.php"><i class="notika-icon notika-support"></i>Logout</a>
                        </li> -->
          </ul>
        </div>
      </div> <!-- .container -->
    </nav>
  
</header>
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: lightcream;  
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
</head>  

<form id="form1" name="form1" method="post" action="editprofileprocess.php">
<center>  <h1>EDIT PROFILE</h1> </center>  
<table width="600px">
  <tr>
    <td>name:</td>
    <td>
        <span class="lnr lnr-user"></span>
        <input type="text" name="name"  id="name" value="<?php echo $row['name'];?>" required onChange="Vallawn();" readonly/>
        <span id="msgl1" style="color:red;"></span>
<script>		
function Vallawn() 
{
    var val = document.getElementById('name').value;
	 if(val=="")
	 {
	    document.getElementById('msgl1').innerHTML="** please fill name";
		return false;
		}
     if (!val.match(/^[A-Z][a-z\ ]{3,}$/)) 
    {
        document.getElementById('msgl1').innerHTML="Start with a Capital letter & Only alphabets !!";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msgl1').innerHTML=" ";
    return true;
}
</script>
    
    </td>
  </tr>
  <tr>
    <td>age:</td>
    <td>
        <span class="lnr lnr-user"></span>
        <input type="text" name="age" id="age" value="<?php echo $row['age'];?>" required onChange="Vallawa();"/>
        <span id="msgl2" style="color:red;"></span>
<script>
function Vallawa() 
{
    var val = document.getElementById('age').value;
    if(val==""){
	    document.getElementById('msgl2').innerHTML="** please fill age";
		return false;
		}
    if (!val.match(/^[0-9]{1,9}$/)) 
    {
        document.getElementById('msgl2').innerHTML="Only Numbers are allowed";
	
		
		            document.getElementById('age').value = "";
        return false;
    }
document.getElementById('msgl2').innerHTML=" ";
    return true;
}
</script>
    
    </td>
  </tr>
   <tr>
   	<span class="lnr lnr-user"></span>
    <td>gender:</td>
    <td>
	<?php
	if($row['gender']=="male")
	{
	?>
      
        <input type="radio" name="gender" id="gender" value="male" checked="checked" required onChange="Vall();" disabled='disabled'/>male
		<input type="radio" name="gender" value="female" disabled='disabled'/>female
		
       <?php
	   }
	else
	{
	?>
	  <input type="radio" name="gender" value="male"  disabled='disabled'/>male
		<input type="radio" name="gender" value="female" checked="checked"  disabled='disabled'/>female
		<?php
		}
		?>
    </td>
	 <span id="msgl3" style="color:red;"></span>
<script>
function Vall()
{
 var val = document.getElementById('gender').value;
    if(val==""){
	    document.getElementById('msgl3').innerHTML="** please select gender";
		return false;
		}
		</script>
  </tr>
<tr>
    <span class="lnr lnr-user"></span>
    <td>phone number:</td>
    <td>
     
        <input type="text" name="phonenumber" ïd="phonenumber"value="<?php echo $row['phonenumber'];?>" required onChange="Vallawpn();"/>
    </td>
	 <span id="msgl4" style="color:red;"></span>
<script>
function Vallawpn() 
{
    var val = document.getElementById('phonenumber').value;
    if(val==""){
	    document.getElementById('msgl4').innerHTML="** please fill mobile number";
		return false;
		}
    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msgl4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phonenumber').value = "";
        return false;
    }
document.getElementById('msgl4').innerHTML=" ";
    return true;
}
</script>
  </tr>
  <tr>
  <span class="lnr lnr-user"></span>
    <td>email:</td>
    <td>
        <input type="text" name="email" id="email" value="<?php echo $row['email'];?>" required onChange="Validata();" readonly/>
    </td>
	<span id="msg3" style="color:red;"></span>
<script>
function Validata() 
{
    var val = document.getElementById('email').value;
	 if(val==""){
	    document.getElementById('msg3').innerHTML="** please fill email";
		return false;
		}

    if (!val.match(/([a-zA-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg3').innerHTML="Enter a Valid Email";
		
	55	     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>
  </tr>
 <!--  <tr>
   <span class="lnr lnr-user"></span>
    <td>address:</td>
    <td>
        <input type="text" name="address" id="address" value="<?php echo $row['address'];?>" required onChange="Vallawadd();"/>
    </td>
	<span id="msgl6" style="color:red;"></span>
<script>
function Vallawadd() 
{
    var val = document.getElementById('address').value;
	 if(val==""){
	    document.getElementById('msgl6').innerHTML="** please fill address";
		return false;
		}
</script>
  </tr>-->
 <!-- <tr>
  <span class="lnr lnr-user"></span>
    <td>court:</td>
    <td>
     
        <input type="text" name="court" id="court" value="<?php echo $row['court'];?>" required onChange="Vallawcr();"/>
    </td>
	<span id="msgl7" style="color:red;"></span>
					<script>
function Validname() 
{
    var val = document.getElementById('court').value;
	 if(val==""){
	    document.getElementById('msgl7').innerHTML="** please fill court";
		return false;
		}
    if (!val.match(/^[A-Z][a-z\ ]{3,}$/)) 
    {
        document.getElementById('msgl7').innerHTML="Start with a Capital letter";
		            document.getElementById('court').value = "";
        return false;
    }
document.getElementById('msgl7').innerHTML=" ";
    return true;
}
</script>
  </tr>-->
  <!-- <tr>
   <span class="lnr lnr-user"></span>
    <td>district:</td>
    <td>
     
     <select name="district" id="district" required onChange="Vallawd();">
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
    </td>
	<span id="msgl8" style="color:red;"></span>
	<script>
 function Vals()
{
 var val = document.getElementById('district').value;
    if(val==""){
	    document.getElementById('msgl8').innerHTML="** please select district";
		return false;
		}
		</script>
  </tr>-->
   <tr>
   <span class="lnr lnr-user"></span>
    <td>experiencedyears:</td>
    <td>
        <input type="text" name="experiencedyears" id="experiencedyears" value="<?php echo $row['experiencedyears'];?>" required onChange="Valee();"/>
    </td>
	<span id="msgle" style="color:red;"></span>
	<script>
function Valee() 
{
    var val = document.getElementById('experiencedyears').value;
    if(val==""){
	    document.getElementById('msgle').innerHTML="** please fill experienced years";
		return false;
		}
    if (!val.match(/^[0-9]{1,9}$/)) 
    {
        document.getElementById('msgle').innerHTML="Only Numbers are allowed";
	
		
		            document.getElementById('experiencedyears').value = "";
        return false;
    }
document.getElementById('msgle').innerHTML=" ";
    return true;
}
</script>

  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    
        <input type="submit" name="Submit" value="update" style="background-color:green"/>
        <button type="button" class="" data-dismiss="modal" style="background-color:red" style="margin-right: 66%"><a href="index.php">Cancel</button>
    
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>
