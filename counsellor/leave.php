
<?php
session_start();
$idd = $_SESSION['id'];
include '../connect.php';
$type=$_POST['type'];
$leavedate=$_POST['leavedate'];
$reason=$_POST['reason'];
 //$rs = mysqli_query($con,"SELECT * FROM tbl_login WHERE status='1' and type1='user' and loginid=$id" );
						  //$row1=mysqli_fetch_assoc($rs);
        	//$logid=$row1['loginid'];
        	//$cs = mysqli_query($con,"SELECT * FROM tbl_reg WHERE loginid='$logid' " );
$sql17="insert into leave_cc(type,leavedate,reason,loginid,status) values('$type','$leavedate','$reason',$idd,'pending')";
$result17 = mysqli_query($con, $sql17);
echo "<script> alert('Successfully apply for the leave'); window.location.href='about.php';</script>";
?>
<!--<script>
alert('successfully reported your case');
window.location='userindex.php';
</script>
--!>

