<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
 include '../connect.php';
  $did =$_GET['did'];
  $sql1="update crimedetails set status='Aproved' where detailid=$did";
    mysqli_query($con, $sql1); 
	echo "<script> alert('Approved'); window.location.href='userapproval.php';</script>";
?>
</body>
</html>
