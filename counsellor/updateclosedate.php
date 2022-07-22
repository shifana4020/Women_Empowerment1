<?php
session_start();

$id=$_SESSION['id'];
if(isset($_POST['complete']))
    {
include("../connect.php");
$status=$_POST['status'];
$comments=$_POST['comments'];
$did=$_POST['iddd'];
$cla=$_POST['closedate'];
$sql="UPDATE `assigncounsel` SET `status`='Completed',`closedate`='$cla' where bookid='$did'";
$r=mysqli_query($con,$sql);
//$sq = mysqli_query($con,"select slots from lawyers where loginid='$lname'");
//$sq = mysqli_fetch_array($sq);
//$slots = $sq[0]-1;
//$sql2="update lawyers set slots='$slots' where loginid='$lname'";
//$res2=mysqli_query($con,$sql2);
	}
?>
<script>
alert("update comments...");
window.location='contact.php';
</script>