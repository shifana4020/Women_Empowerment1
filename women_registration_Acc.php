<?php
    include 'connect.php';
  //  $cno = $_REQUEST['con_no'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $state = $_POST['state'];
	$district = $_POST['district'];
  $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $s = "SELECT * FROM tbl_login WHERE username = '$email'";
    $result1 = mysqli_query($con, $s);
    $row1=mysqli_fetch_assoc($result1);
    $uname= isset($row1['username']) ? $row1['username'] : '';
	
    if($uname=="")
    {
            if($password===$confirm_password)
            {
            $sq = "INSERT INTO tbl_login (username,password,type1,status) VALUES ('$email','$password','user','1')";
            
             mysqli_query($con, $sq);

              $sqll = "SELECT * FROM tbl_login WHERE username = '$email' and password = '$password' and type1 = 'user'";
             $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
        
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $email=$row['username'];
             $loid=$row['loginid'];
             $sql = "INSERT INTO tbl_reg (name,address,email,phone,state,district,dob,gender,estatus,loginid) VALUES ('$name','$address','$email','$phone','$state','$district','$dob','$gender','1','$loid')";
             mysqli_query($con, $sql);
            //  header("location:src/verifymail3.php?email=$email");
            echo "<script> alert('Registration successfull'); window.location.href='index.php';</script>";
             }
         }
         else
            echo "<script> alert('please enter password correctly'); window.location.href='index.php';</script>";
}
else
echo "<script> alert('please enter another username'); window.location.href='index.php';</script>"





?>