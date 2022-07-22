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
                    <h4 class="tittle-w3-agileits mb-4">New Case Details</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User Details</th>
								<th>Id Proof</th>
                                <th>Crime Details</th>
                                <th>Specialization</th>
                                 <th>Lawyers</th>
                                <th class="text-center" colspan="2" align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';


$sql="select * from crimedetails where  status='Aproved'";

$res=mysqli_query($con,$sql);


while($r=mysqli_fetch_array($res))
{
$in=$r['category'];
$sql1n="select * from crimecategory where crimeid=$in";
$res1n=mysqli_query($con,$sql1n);
$r1n=mysqli_fetch_array($res1n);
//$id=$r['detailid'];
$logid = $r['logid'];
$sql1="select * from tbl_reg where loginid=$logid";
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
$dis = $r1['district'];

?>
<form method="post" action="assignpro.php">
<input type="hidden" name="cid" value="<?php echo $r[0];?>" />
		<tr><td><b>Name:</b><?php echo $r1['name'];?><br />
        <b>Address:</b><?php echo $r1['address'];?><br /><b>Email:</b><?php echo $r1['email'];?><br><b>Ph no:</b><?php echo $r1['phone'];?><br>
        <b>State:</b><?php echo $r1s['sname'];?><br />
		<b>District:</b><?php echo $r1q['dname'];?><br /><b>Dob:</b><?php echo $r1['dob'];?></td><td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td><td>
		
		<b>Category:</b><?php echo $r1n['category'];?><br />
        <b>Complaint:</b><?php echo $r['discription'];?><br /><b>Crime Date on: </b><?php echo $r['crimedate'];?><br><b>Applied Date: </b><?php echo $r['applydate'];?></td>
		
        <td>
            <?php if($iid==0) { ?>
            <select name="specialization" onchange="location = this.value;" required>
				<option selected value=""  disabled>Choose Category</option>	
		<?php
		$sql2="select lawyerspecialization.categorylawyer from lawyers join lawyerspecialization on lawyers.specialization = lawyerspecialization.lawyerspeid WHERE status=1";
        $sql3="SELECT * FROM `lawyerspecialization`";
        $res3=mysqli_query($con,$sql3);

$res2=mysqli_query($con,$sql2);
while($r2=mysqli_fetch_array($res3))
{
?>
				<option value="viewcases.php?sid=<?php echo $r2['lawyerspeid'];?>" ><?php echo $r2['categorylawyer'];?>
            </option>
				<?php	} ?>
				</select>
                <?php } else { ?>
                    <select  name="specialization" onchange="location = this.value;" required>	
		<?php
		$sql2="select * from lawyers join lawyerspecialization on lawyers.specialization = lawyerspecialization.lawyerspeid WHERE status=1";
$res2=mysqli_query($con,$sql2);
$sql3="SELECT * FROM `lawyerspecialization`";
$res3=mysqli_query($con,$sql3);
while($r2=mysqli_fetch_array($res3))
{ ?>
				<option value="viewcases.php?sid=<?php echo $r2['lawyerspeid'];?>" <?php if($r2['lawyerspeid']==$iid) { ?>selected<?php } ?>> <?php echo $r2['categorylawyer'];?></option>
				<?php
				}
				?>
				</select>
                <?php } ?>
            </td>

                <span class="lnr lnr-user"></span>
                <td><select name="lname" id="lname" required onchange="Valstat();">
                <span id="msgi1" style="color:red;"></span>
				<option selected value="" disabled >Choose lawyer</option>

		<?php
		    $sql2="select * from lawyers WHERE specialization='$iid' and status=1 and district='$dis'";
            $res2=mysqli_query($con,$sql2);
            while($r2=mysqli_fetch_array($res2))
            {
        ?>
				<option value="<?php echo $r2['lawyerid'];?>"><?php echo $r2['name'];?></option>
				<?php
				}
				?>
				</select>
            </td>
            <td><button type="submit" value="Assign" style="background-color:#FFAAAA">Assign</button></td>
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
<script>		
function Valstat() 
{
    var val = document.getElementById('lname').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill lawyer name";
		return false;
		}
	}
</script>