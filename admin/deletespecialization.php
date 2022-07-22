<?php
  session_start();
  $id=$_GET['id'];
  include '../connect.php';
  $sqwe = "UPDATE `specification_tbl` SET status='inactive' WHERE spec_id='$id'";
  mysqli_query($con, $sqwe);
  echo "<script> alert('Specialization inactived'); window.location.href='viewspecialization.php';</script>";
?>