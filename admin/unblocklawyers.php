<?php
  session_start();
  $id=$_GET['id'];
  include '../connect.php';
  $sq = "UPDATE `lawyers` SET status=1 WHERE loginid = '$id'";
  mysqli_query($con, $sq);
  $sql = "UPDATE `tbl_login` SET status=1 WHERE loginid = '$id'";
  mysqli_query($con, $sql);
  echo "<script> alert('Lawyerr unblocked'); window.location.href='viewlawyers.php';</script>";
?>