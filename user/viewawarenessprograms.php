<?php
include '../connect.php';
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...

?>
<?php
include("header.php");
?>
<!-- header -->
<!-- mail -->
	<div class="mail">
		<!--<div class="container">-->
			<h3><span>Awareness programs</span> </h3>
			
			<!--<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<div class="mail-grid-left1">
					<section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-2">
                    <table  width="1"class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Programname</th>
								<th>name</th>
								  <th>Date</th>
								  <th>Time</th>
                                  <th>Mode</th>
                                  <th>Link</th>
                                <th>Description</th>
								 <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
						include '../connect.php';
$sql="select * from awarenessprograms  WHERE status='active'";
$result = mysqli_query($con, $sql);
//$r= mysqli_fetch_assoc($result);
while($r=mysqli_fetch_array($result))
{?>
		<tr><td><?php echo $r['programname'];?></td>
		<td><?php echo $r['name'];?></td>
		   <td><?php echo $r['date'];?></td>
		   <td><?php echo $r['ptime'];?></td>
           <td><?php echo $r['mode'];?></td>
           <td><?php echo $r['link'];?></td>
        <td><?php echo $r['discription'];?></td>
        <td><img src="../uploads/<?php echo $r['file'];?>" width="100" height="100"></td>
          </tr>
                      <?php
}
?></tbody>
                    </table>
                </div>
				<!--<div class="col-md-6 mail-grid-right">
					<div class="mail-grid-right1">
						<img src="images/s.jpg" width="400" height="350">
					</div>
				</div>-->
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="col-md-4 footer-grid-left">
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left">
					<p>&copy 2022 Women Empowerment. All rights reserved |</p>
				</div>
				<!--<div class="social_icons">
					<a href="#" class="icon icon-cube facebook"></a>
					<a href="#" class="icon icon-cube rss"></a>
					<a href="#" class="icon icon-cube instagram"></a>
					<a href="#" class="icon icon-cube t"></a>
					<div class="clearfix"> </div>-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>