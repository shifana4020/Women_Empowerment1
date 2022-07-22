
<?php
include '../connect.php';
session_start();
$id = $_SESSION['id'];
//echo $id;
$applydate=date('d-m-Y');
$crimedate=$_POST['crimedate'];
$category=$_POST['category'];
$discription=$_POST['discription'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$file);
$file1=$_FILES['file1']['name'];
move_uploaded_file($_FILES['file1']['tmp_name'],"../uploads/".$file1);
 //$rs = mysqli_query($con,"SELECT * FROM tbl_login WHERE status='1' and type1='user' and loginid=$id" );
						  //$row1=mysqli_fetch_assoc($rs);
        	//$logid=$row1['loginid'];
        	//$cs = mysqli_query($con,"SELECT * FROM tbl_reg WHERE loginid='$logid' " );
$sql1="insert into crimedetails(applydate,crimedate,discription,category,idproof,file1,status,logid) values('$applydate','$crimedate','$discription','$category','$file','$file1','Reported',$id)";
$result = mysqli_query($con, $sql1);
echo "<script> alert('Successfully reported your case'); window.location.href='reportcase.php';</script>";
?>
<!--<script>
alert('successfully reported your case');
window.location='userindex.php';
</script>
