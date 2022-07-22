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
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$district=$_POST['district'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$q="update tbl_reg set name='$name',gender='$gender',address='$address',district='$district',dob='$dob',email='$email',phone='$phone' where loginid='$id'";
mysqli_query($con,$q);
header('location:userindex.php');
?>
</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>
