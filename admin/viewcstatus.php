<?php
session_start();
error_reporting(0);
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
                    <h4 class="tittle-w3-agileits mb-4">Counsellor Booking Details</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User Details</th>
								<th>Id Proof</th>
                                <th>Book Details</th>
                                 <th>Counsellor Details</th>
                                 <th> feedback from user</th>
                                </th><th class="text-center" colspan="2" align="center">
                                   Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';


$sql="select * from bookdetails where  status='Assigned'";
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$in=$r['specialization'];
$sql1n="select * from specification_tbl where spec_id=$in";
$res1n=mysqli_query($con,$sql1n);
$r1n=mysqli_fetch_array($res1n);
$id=$r['logid'];
$did=$r['bookid'];
$sql1="select * from tbl_reg where loginid=$id";
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
$sqe="select * from assigncounsel where  bookid=$did";
$ree=mysqli_query($con,$sqe);
$k=mysqli_fetch_array($ree);
$lid=$k['counsellorid'];
$sg="select * from counsellors where counsellorid=$lid";
$rg=mysqli_query($con,$sg);
$j=mysqli_fetch_array($rg);
$iddd=$j['specialization'];
$sql1="select * from specification_tbl where spec_id=$iddd";
$res1=mysqli_query($con,$sql1);

$r3=mysqli_fetch_array($res1);
?>
		<tr><td><b>Name:</b><?php echo $r1['name'];?><br />
        <b>Address:</b><?php echo $r1['address'];?><br /><b>Email:</b><?php echo $r1['email'];?></br><b>Ph no:</b><?php echo $r1['phone'];?><br>
        <b>State:</b><?php echo $r1s['sname'];?><br />
        <b>District:</b><?php echo $r1q['dname'];?><br /><b>Dob:</b><?php echo $r1['dob'];?></td><td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td><td>
		<b>Category:</b><?php echo $r1n['category'];?><br />
		<b>Message:</b><?php echo $r['message'];?><br />on <?php echo $r['fromdate'];?></td>
		
        		
                <td>
				<b>Counsellor: </b><?php echo $j['name'];?><br />
				<b>Email: </b><?php echo $j['email'];?><br />
				<b>Counselling Category: </b><?php echo $r3['category'];?> <br />
				</td>
                <td><?php echo $k['feedback'];?></td>
				<td><?php echo $k['status'];?></td>
                
		</form>		
                      <?php
}
?></tbody>
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