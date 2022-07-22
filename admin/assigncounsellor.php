<?php
extract($_POST);
$cid=$_POST["cid"];
$cname=$_POST["cname"];
include '../connect.php';
$sql2="insert into assigncounsel(bookid,counsellorid,status) values('$cid','$cname','Assigned')";
$res1=mysqli_query($con,$sql2);
$sql="update bookdetails set status='Assigned' where bookid=$cid";
$res=mysqli_query($con,$sql);
//$sq = mysqli_query($con,"select slots from counsellors where counsellorid='$cname'");
//$sq = mysqli_fetch_array($sq);
//$slots = $sq[0]+1;
//$sql2="update counsellors set slots='$slots' where counsellorid='$cname'";
//$res2=mysqli_query($con,$sql2);
?>
<script>
alert('Counsellor Assigned....!');
window.location='viewcounseling.php';
</script>

