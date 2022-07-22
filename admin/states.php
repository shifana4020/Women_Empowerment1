<?php
require_once "../connect.php";
$d_id = $_POST["s_id"];
$result = mysqli_query($con,"SELECT * FROM tbl_district where s_id=$d_id");
?>
<option value="">Select district</option>
<?php
while($row = mysqli_fetch_array($result)){
?>
<option value="<?php echo $row["d_id"];?>"><?php echo $row["dname"];?></option>
<?php
}
?>