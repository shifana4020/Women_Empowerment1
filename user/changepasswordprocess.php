
<?php
session_start();
include'../connect.php';
if(isset($_POST['b']))
{

$cpass=$_POST['cpass'];
$npass=$_POST['pass'];
$id=$_SESSION['id'];
$q1="update tbl_login set password='$npass' where loginid=$id";
$res1=mysqli_query($con,$q1);
}
?>
<script>
alert("password changed...");
window.location='changepassword.php';
</script>



