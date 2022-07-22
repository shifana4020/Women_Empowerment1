<?php
session_start();
//$id = $_SESSION['id'];
if (! empty($_SESSION['logged_in'])) {
	# code...
?>

<?php	
 include '../connect.php';
  $id=$_GET['id'];
  if(isset($_POST['sb'])){
	  $rep = $_POST['reason'];
	$sql1 = "update crimedetails set status='Rejected', reason='$rep' where detailid=$id";
    mysqli_query($con, $sql1);
    echo "<script> alert('Rejected'); window.location.href='userapproval.php';</script>";
  }
?>
              <?php
			  include("header.php");
			  ?>
        
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center"></h2>
            <!--// main-heading -->

          
    
            <!-- Grids Content -->
            <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">User Requests</h4>
					<center>
					<form method="post">
					<textarea name="reason"></textarea><br>
					<input type="submit" value="Submit" name="sb">
          <button type="button"><a href="userapproval.php">Cancel</button>
					</form>
					</center>
                </div>
                <!--// Grids Info -->
                

           
                                   
           <?php 
		   include("footer.php");
		   ?>
		   <?php
}
else
header('location:../login.php');
?>