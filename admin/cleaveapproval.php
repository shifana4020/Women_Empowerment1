<?php
session_start();
//$id = $_SESSION['id'];
if (! empty($_SESSION['logged_in'])) {
	# code...
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
                    <h4 class="tittle-w3-agileits mb-4">Leave Requests</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                           
                                 <th >
                               Counsellor Details
                                    </th>
                                    <th>
                               id proof
                                    </th>
									   <th>
                               Leave details
                                    </th>
                                </th><th class="text-center" colspan="2" align="center">
                                    Action 
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';
$sql="select * from leave_cc where  status='pending'";
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$id=$r['loginid'];
$sql1="select * from counsellors  where  loginid=$id";
$res1=mysqli_query($con,$sql1);
$r1=mysqli_fetch_array($res1);
$if=$r1['state'];
$sql1s="select * from tbl_state where s_id=$if";
$res1s=mysqli_query($con,$sql1s);
$r1s=mysqli_fetch_array($res1s);
$idf=$r1['district'];
$sql1q="select * from tbl_district where d_id=$idf";
$res1q=mysqli_query($con,$sql1q);
$r1q=mysqli_fetch_array($res1q);
?>
		<tr><td><b>Name:</b><?php echo $r1['name'];?><br><b>Age:</b><?php echo $r1['age'];?><br>
        <b>Gender:</b><?php echo $r1['gender'];?><br><b>Ph no:</b><?php echo $r1['phonenumber'];?><br><b>Email:</b><?php echo $r1['email'];?><br>
        <b>Address:</b><?php echo $r1['address'];?><br><b>State:</b><?php echo $r1s['sname'];?><br><b>District:</b><?php echo $r1q['dname'];?></td>
       
        <td><img src="../uploads/<?php echo $r1['idproof'];?>" width="100" height="100"></td>
        
        <td><b>Leave Type:</b><?php echo $r['type'];?><br><b>Leave Date:</b><?php echo $r['leavedate'];?><br /><b>Reason:</b><?php echo $r['reason'];?></td>

        		<td><a href="accept.php?id=<?php echo $r1[9];?>&did=<?php echo $r[0]; ?>"style="border: none; color:green;"><i class="fa fa-check-square"></i></a></td>
                <td><a href="rejected.php?id=<?php echo $r[0];?>"style="border: none; color:red;"><i class="fas fa-times"></i></a></td>
				</tr>
                      <?php
}
?>
				</tbody>
                    </table>
                </div>
                <!--// Grids Info -->
                

           
                                   
           <?php 
		   include("footer.php");
		   ?>
		   <?php
}
else
header('location:../login/login.php');
?>