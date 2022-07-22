<?php
include('../connect.php');
session_start();
//error_reporting(0);
$uid = $_SESSION['id'];
// $name = $_GET['name'];
$amount = $_GET['amount'];
$artist = $_GET['ar'];
$sql="UPDATE `tbl_payment` SET status='Paid' WHERE  `uid`= '$uid'";
$query_run=mysqli_query($con,$sql);
   

$qq = mysqli_query($con,"UPDATE `crimedetails` SET status='Aproved' WHERE  detailid = '$artist' ");
$query_run=mysqli_query($con,$qq);
 

echo "<script>window.location='successful.php?did=$artist';</script>";

?>