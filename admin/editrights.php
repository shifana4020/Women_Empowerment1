<?php    
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...  
    include '../connect.php';
    $rightid=$_GET['rightid'];
    $sql="select * from `rights` where rightid='$rightid'";
    $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    // $discription = $row['discription'];
    //$file = $row['file'];
    //$officer_email = $row['officer_email'];
    //$officer_password = $row['officer_password'];

    if(isset($_POST['s']))
    {
    $rightid=$_GET['rightid']; 
    $name = $_POST['name'];
    // $discription = $_POST['discription'];
   // $file = $_FILES['file']['name'];
	//move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/$rightid/".$_FILES["file"]["name"]);
	//move_uploaded_file($_FILES['pimg']['tmp_name'],"../uploads/".$pimg);
	//if($_FILES['pimg']['name']=='')
        //{
            //$path=$_POST['old'];
       // }
      //  else {
                //$pimg=$_FILES['pimg']['name'];
                //$pimg_tmp=$_FILES['files']['tmp_name'];
                //$path="../upload/".$pimg;
				//move_uploaded_file($_FILES['pimg']['tmp_name'],"../uploads/".$pimg);
               
            //}
	
    //$officer_email = $_POST['email'];
   // $officer_password = $_POST['password'];
    
   
        mysqli_query($con,"UPDATE `rights` SET 
        `rightid`='$rightid',`name`='$name' where rightid='$rightid'");
    
            echo "<script>alert('Updated');</script>";
            header('location: viewrights.php');
     }
 ?>
 <?php
include("header.php");
?>
 <!DOCTYPE html>  
<html>  
<head>  
<title>Admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
.container {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: white;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style> 
<style> form{
  padding: 150px 170px;
}</style> 
</head>  
<body>      
            <div class="container">
            <!-- main-heading -->
            <!--// main-heading -->
             <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
             <form method='post' action="" >  
  <div class="container">  
  <center>  <h1>update information</h1> </center>  
  <hr>  
  <div class="modal-header">
 
                          </div>
                      <div class="modal-body">
                     <div class="card-body card-block">
                     <div class="form-group">
                        <label for="company" class=" form-control-label">Name</label>
                   <input type="text"   class="form-control" name="name"  id="name"  onfocusout="f1()" value="<?php echo $name?>">
                </div>
                <!-- <div class="form-group">
                        <label for="company" class=" form-control-label">Discription</label>
                    <input type="text"  class="form-control" name="discription" id="discription"  onfocusout="f1()" value="<?php echo $discription?>">
                </div> -->
                <!--<div class="form-group">
                        <label for="company" class=" form-control-label">price</label>
                    <input type="number"  class="form-control" name="price"  id="rank"  onfocusout="f1()" value=<?php echo $price?>>
                </div>-->
               <!-- <div class="form-group">
                        <label for="company" class=" form-control-label">file</label>
                    <input type="file"  class="form-control" name="file" id="file" onfocusout="f1()" value=<?php echo $file?>>
					<!--<input type="hidden" name="old" onfocusout="f1()" value=<?php echo $file?>>-->
                </div>
                
                
               
                <!--<div class="form-group">
                        <label for="company" class=" form-control-label">Email </label>
                    <input type="email"   class="form-control" name="email" id="email" onfocusout="f1()" value=<<?php echo $officer_email?>>
                </div>  
                <div class="form-group">
                       
                     <p style="">Password</p><input type="text"  name="password"   id="pwd"  value=<?php echo $officer_password?>>

                </div>  -->
            </div>  
                     
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 66%"><a href="adminindex.php">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="s">Update</button>
            </div>
                   
            </div>
                </div>
            
</form> 
 <!--// Grids I
             Copyright -->
           <!-- <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>� 2022 Admin panel . All Rights Reserved 
                    <a href="http://w3layouts.com/">  </a>
                </p>
            </div>-->
            <!--// Copyright -->
            </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working --> 
</body>  
</html>
<?php 
		   include("footer.php");
		   ?>
<?php
}
else
header('location:../login/login.php');
?>