<?php
  session_start();
  $id=$_GET['id'];
  include '../connect.php';
  $sq = "UPDATE `counsellors` SET status=1 WHERE loginid = '$id'";
  mysqli_query($con, $sq);
  $sql = "UPDATE `tbl_login` SET status=1 WHERE loginid = '$id'";
  mysqli_query($con, $sql);
  echo "<script> alert('Counsellor unblocked'); window.location.href='viewcounsellor.php';</script>";
?>