<?php
include('../connect.php');
session_start();
//error_reporting(0);
$uid = $_SESSION['id'];
// $name = $_GET['name'];
$amount = $_GET['amount'];
$artist = $_GET['ar'];
$sql="UPDATE `tbl_payment2` SET status='Paid' WHERE userid = '$uid'";
$query_run=mysqli_query($con,$sql);
   

$qq = mysqli_query($con,"UPDATE `bookdetails` SET status='Approved' WHERE  bookid = '$artist' ");
$query_run=mysqli_query($con,$qq);
 

echo "<script>window.location='successful1.php?did=$artist';</script>";

?>