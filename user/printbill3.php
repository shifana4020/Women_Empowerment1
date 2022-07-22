<?php
session_start();
error_reporting(0);
include '../connect.php';
if(isset($_SESSION['logged_in']))
    $id=$_SESSION['id'];
   $did=$_GET['did'];
$result=mysqli_query($con,"SELECT `name`,`address`,`gender`,`email`,`phone` FROM `tbl_reg` where loginid=$id") or die(mysqli_error($con));
$result1=mysqli_query($con,"SELECT `charge`,`status` FROM `tbl_payment2` where bookid=$did") or die(mysqli_error($con));
$result2=mysqli_query($con,"SELECT `fromdate` FROM `bookdetails` where bookid=$did") or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);


if(isset($_POST['finish'])){
    
  header("location:bookcouncellor.php");
}

?>
<html>
  <head>
      <title>Invoice</title>
      <style>
      .ord-inv-cont{
          margin-left: 25%;
          
}
.inv-body{
  margin-top: 30px;
background-color: whitesmoke;
box-shadow: 1px 1px 1px 1px;
width: 55%;

}
.inv-dtls{
  text-align: center;
}
.inv-dtls h2{
  padding-top:4%;
  font-style: bold;
  color:black;
}
.inv-dtls p{
  font-size: 12px;
  font-style: italic;
  margin-top:-5px;
}
.inv-conts{
  margin: 50px;
}

.inv-head h5{
  margin-bottom: 20px;
}
.inv-addr{
  margin-left: 8%;
  margin-bottom: 10%;
}
.inv-tbl table{
 width: 100%;
}
.inv-tbl table tr{
  width: 100%;
}.inv-tbl table th{
  width: 10%;

}.inv-tbl table td{
  width: 10%;
  margin-left: 100px;
}
.inv-tot{
  margin-top: 20px;
}
.inv-tot text{
  float: left;
  text-align: inline;
}

.pay-stat{
  margin-top: 40px;
  width: 70%;
  background-color: #5cf78d;
  height: 30px;
  margin-left: 60px;
  color: black;
  text-align: center;
  margin-bottom: 10px;
}
.ord-stat{
  width: 70%;
  background-color: #2cf56c;
  height: 30px;
  margin-left: 60px;
  color: black;
  text-align: center;
  margin-bottom: 30px;
}
.inv-footer{
  margin-top:15px;
  padding-bottom: 10px;
  text-align: center;
}
.inv-btn{
  border: none;
  width: 150px;
  height:30px;
  border-radius:6px;
  background-color:#57d7fa;
  color: black;
  margin-left: 25%;
}
.inv-btn:hover{
  border: none;
  border-radius:6px;
  background-color:#51ad89;
  color: black;
}
.inv-btn1{
  border: none;
  width: 150px;
  height:30px;
  border-radius:6px;
  background-color:orange;
  color: black;
}
.inv-btn1:hover{
  border: none;
  border-radius:6px;
  background-color:lawngreen;
  color: black;
}


  </style>
  </head>
  <body>
<div class="ord-inv-cont" >
          <div class="inv-body" id="invoice">
              <div class="inv-dtls">
                  
                  <h2>Women Empowerment</h2>
                  <p></p>
              </div>
              <form method="post">
              <div class="inv-conts">
                  <div class="inv-head">
                  <h5>Name :&nbsp; <?php echo $row['name']; ?></h5>
                  <h5>Email:&nbsp; <?php echo $row['email']; ?></h5>
                  <h5>Address:&nbsp; <?php echo $row['address']; ?></h5>
                  <h5>Phone Number:&nbsp; <?php echo $row['phone']; ?></h5>
                  <h5>Service Charge:&nbsp; <?php echo $row1['charge']; ?></h5>
                  <h5>Date:&nbsp; <?php echo $row2['fromdate']; ?></h5>
                 
        
                  </div>
                
                  <div class="inv-tbl">
                     
                      <table>
                          <tr>
                          <!-- <th>Product Name</th>
                          <center><th>Quantity</th></center> -->
                          <!-- <th>Price</th> -->
                          </tr>
                          
                          <tr>
                              <!-- <td><?php echo $r3['product_name'];?></td> -->
                              <!-- <td><?php echo $row2['quantity'];?></td> -->
                              <!-- <td><?php echo $row1['charge'];?></td> -->
                              </tr>
                          
                     
                      </table>
                  </div>
                  
                  <div class="inv-pay-stat">
                 
                      <div class="pay-stat">
                      <text><?php echo $row1['status']?></text>
                      </div>
                  </div>
                  <div class="inv-footer">
                      <text>Thank you for choosing us</text>
                  </div>
              </div>
              
          </div>
          <p>

          <button class="inv-btn" onclick="printDiv('invoice')">Download Invoice</button>
          <button class="inv-btn1" type="submit" name="finish" >Finish</button></p>
          
   </div>
</form>
<!-- print screen -->
<script type="text/javascript">
    function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;

   document.body.innerHTML = printContents;

   window.print();

   document.body.innerHTML = originalContents;
}
  </script>
  </body></html>