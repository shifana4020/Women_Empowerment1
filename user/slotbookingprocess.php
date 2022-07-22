
<?php
include '../connect.php';
session_start();
$id = $_SESSION['id'];
//echo $id;
$fromdate=date('d-m-Y');
$specialization=$_POST['specialization'];
$message=$_POST['message'];
$file=$_FILES['idproof']['name'];
move_uploaded_file($_FILES['idproof']['tmp_name'],"../uploads/".$file);
 //$rs = mysqli_query($con,"SELECT * FROM tbl_login WHERE status='1' and type1='user' and loginid=$id" );
						  //$row1=mysqli_fetch_assoc($rs);
        	//$logid=$row1['loginid'];
        	//$cs = mysqli_query($con,"SELECT * FROM tbl_reg WHERE loginid='$logid' " );
$sql1="insert into bookdetails(fromdate,message,specialization,idproof,status,logid) values('$fromdate','$message','$specialization','$file','booked','$id')";
$result = mysqli_query($con, $sql1);
echo "<script> alert('Successfully booked your slot'); window.location.href='bookcouncellor.php';</script>";
?>
<!--<script>
alert('successfully reported your case');
window.location='userindex.php';
</script>
-->

