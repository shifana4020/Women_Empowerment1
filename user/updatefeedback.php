<?php
session_start();

$uid=$_SESSION['id'];
if(isset($_POST['update']))
    {
include("../connect.php");
$status=$_POST['status'];
$did=$_POST['iddd'];
$sta=$_POST['feedback'];
$sql="UPDATE `assigncounsel` SET `feedback`='$sta' where bookid='$did'";
$r=mysqli_query($con,$sql);
//$sq = mysqli_query($con,"select slots from lawyers where loginid='$lname'");
//$sq = mysqli_fetch_array($sq);
//$slots = $sq[0]-1;
//$sql2="update lawyers set slots='$slots' where loginid='$lname'";
//$res2=mysqli_query($con,$sql2);
	}
?>
<script>
alert("update feedback...");
window.location='approvecounsellor.php';
</script>