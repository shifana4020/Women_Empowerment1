<?php
session_start();
error_reporting(0);
@$iid = $_GET['sid'];
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
                                <th>Booking Details</th>
                                <th>Specialization</th>
                                 <th>Counsellors</th>
                                <th class="text-center" colspan="2" align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';


$sql="select * from bookdetails where  status='Approved'";

$res=mysqli_query($con,$sql);


while($r=mysqli_fetch_array($res))
{
    $ldate = $r['fromdate'];
//$id=$r['bookid'];
$in=$r['specialization'];
$sql1n="select * from specification_tbl where spec_id=$in";
$res1n=mysqli_query($con,$sql1n);
$r1n=mysqli_fetch_array($res1n);
$logid = $r['logid'];
$sql1="select * from tbl_reg where loginid=$logid";
$res1=mysqli_query($con,$sql1);

$r1=mysqli_fetch_array($res1);

$dis = $r1['district'];

$if=$r1['state'];
$sql1s="select * from tbl_state where s_id=$if";
$res1s=mysqli_query($con,$sql1s);
$r1s=mysqli_fetch_array($res1s);
$idf=$r1['district'];
$sql1q="select * from tbl_district where d_id=$idf";
$res1q=mysqli_query($con,$sql1q);
$r1q=mysqli_fetch_array($res1q);
?>
<form method="post" action="assigncounsellor.php">
<input type="hidden" name="cid" value="<?php echo $r[0];?>" />
		<tr><td><b>Name:</b><?php echo $r1['name'];?><br />
        <b>Address:</b><?php echo $r1['address'];?><br /><b>Email:</b><?php echo $r1['email'];?></br><b>Ph.no:</b><?php echo $r1['phone'];?><br>
        <b>State:</b><?php echo $r1s['sname'];?><br />
		<b>District:</b><?php echo $r1q['dname'];?><br /><?php echo $r1['dob'];?></td><td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td><td>
		<b>Category:</b><?php echo $r1n['category'];?><br />
        <b>Message:</b><?php echo $r['message'];?><br />on <?php echo $r['fromdate'];?></td>
		
        <td>
            <?php if($iid==0) { ?>
            <select name="specialization" onchange="location = this.value;" required>
				<option selected value=""  disabled>Choose Specialization</option>	
		<?php
		$sql2="select specification_tbl.category from counsellors join specification_tbl on counsellors.specialization = specification_tbl.spec_id WHERE status=1";
        $sql3="SELECT * FROM `specification_tbl`";
        $res3=mysqli_query($con,$sql3);

$res2=mysqli_query($con,$sql2);
while($r2=mysqli_fetch_array($res3))
{
?>
				<option value="viewcounseling.php?sid=<?php echo $r2['spec_id'];?>" ><?php echo $r2['category'];?>
            </option>
				<?php	} ?>
				</select>
                <?php } else { ?>
                    <select  name="specialization" onchange="location = this.value;" required>	
		<?php
		$sql2="select * from counsellors join specification_tbl on counsellors.specialization = specification_tbl.spec_id WHERE status=1";
$res2=mysqli_query($con,$sql2);
$sql3="SELECT * FROM `specification_tbl`";
$res3=mysqli_query($con,$sql3);
while($r2=mysqli_fetch_array($res3))
{ ?>
				<option value="viewcounseling.php?sid=<?php echo $r2['spec_id'];?>" <?php if($r2['spec_id']==$iid) { ?>selected<?php } ?>> <?php echo $r2['category'];?></option>
				<?php
				}
				?>
				</select>
                <?php } ?>
            </td>
                <td><select name="cname" required>
				<option value="0">Choose Counsellor</option>
				
		<?php
       // $sql2 = "SELECT * FROM counsellors WHERE specialization='$iid' and district='$dis' and status=1";
      $sql2=" SELECT * FROM counsellors WHERE loginid not in (SELECT loginid from leave_cc where leavedate='$ldate' and status='Accepted' ) and specialization='$iid' and district='$dis' and status=1";
       //$sql2 = "SELECT * FROM counsellors WHERE loginid != (SELECT loginid from leave_cc where leavedate='$ldate' and status='Accepted' ) and specialization='$iid' and district='$dis' and status=1 ";
       //$sql2 = "SELECT * FROM `counsellors`join leave_cc on counsellors.loginid= leave_cc.loginid where leave_cc.leavedate!='$ldate'AND counsellors.status=1 and counsellors.district='$dis' and counsellors.specialization='$iid' and leave_cc.status!='Accepted'";
		//$sql2="select * from counsellors WHERE status=1 and district='$dis' and specialization='$iid'";
       
        
$res2=mysqli_query($con,$sql2);
while($r2=mysqli_fetch_array($res2))
{
?>
				<option value="<?php echo $r2['counsellorid'];?>"><?php echo $r2['name'];?></option>
				<?php
				}
				?>
				</select></td>
                <td> <input type="submit"  value="Assign" style="background-color:#FFAAAA" /></td>

                                    
                                 
                                    
		</form>		
                      <?php
}
?></tbody>
                    </table>
                </div>
                <!--// Grids Info -->
                

           
                                   
           <?php 
           //echo $sql2;
		   include("footer.php");
		   ?>
		    <?php
}
else{
    header('location:../login/login.php');
}
   
?>
<?php
//if(@$_GET['bid']){
    //$bid=$_GET['bid'];
   // mysqli_query($con,"update bookdetails set status='Change date' where bookid=$bid");
    //echo"<script>
    //alert('Message sended');
    //window.location='viewcounseling.php';
    //</script>";

//} 