<?php
session_start();
ob_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>
<?php
include("header.php");
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin panel</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->


</head>

<body>
    <!--<div class="bg-page py-5">-->
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-blue">Add Counsellors</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="post" enctype="multipart/form-data">
                    <div class="form-group">
					<span class="lnr lnr-user"></span>
                        <label>Enter Counsellor name</label>
                        <input type="text" class="form-control" placeholder="enter counsellor name" name="name" id="name" required onChange="Vallawn();">
                    </div>
                    <span id="msgl1" style="color:red;"></span>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>		
function Vallawn() 
{
    var val = document.getElementById('name').value;
	 if(val=="")
	 {
	    document.getElementById('msgl1').innerHTML="** please fill name";
		return false;
		}
     if (!val.match(/^[A-Z][a-z\ ]{3,}$/)) 
    {
        document.getElementById('msgl1').innerHTML="Start with a Capital letter & Only alphabets !!";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msgl1').innerHTML=" ";
    return true;
}
</script>
                   <div class="form-group">
				   <span class="lnr lnr-user"></span>
                        <label>Enter Age</label>
                        <input type="text" class="form-control" placeholder="enter age" name="age" id="age" required onChange="Vallawa();">
                    </div>
					 <span id="msgl2" style="color:red;"></span>
<script>
function Vallawa() 
{
    var val = document.getElementById('age').value;
    if(val==""){
	    document.getElementById('msgl2').innerHTML="** please fill age";
		return false;
		}
    if (!val.match(/^[0-9]{1,9}$/)) 
    {
        document.getElementById('msgl2').innerHTML="Only Numbers are allowed";
	
		
		            document.getElementById('age').value = "";
        return false;
    }
document.getElementById('msgl2').innerHTML=" ";
    return true;
}
</script>
		            <div class="form-group">
					 <span class="lnr lnr-user"></span>
                       Gender<input  name="gender" type="radio"  id="gender" value="male" required onChange="Vall();">Male
					<input  name="gender" type="radio" value="female" >Female
                    </div>
					 <span id="msgl3" style="color:red;"></span>
<script>
function Vall()
{
 var val = document.getElementById('gender').value;
    if(val==""){
	    document.getElementById('msgl3').innerHTML="** please select gender";
		return false;
		}
		</script>
                      <div class="form-group">
					   <span class="lnr lnr-user"></span>
                        <label>Enter phonenumber</label>
      <input type="text" class="form-control" placeholder="enter phonenumber" name="phonenumber" id="phonenumber" required onChange="Vallawpn();">
                    </div>
					 <span id="msgl4" style="color:red;"></span>
<script>
function Vallawpn() 
{
    var val = document.getElementById('phonenumber').value;
    if(val==""){
	    document.getElementById('msgl4').innerHTML="** please fill mobile number";
		return false;
		}
    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msgl4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phonenumber').value = "";
        return false;
    }
document.getElementById('msgl4').innerHTML=" ";
    return true;
}
</script>
					 <div class="form-group">
					 <span class="lnr lnr-user"></span>
                        <label>Enter email id</label>
                      <input type="text" class="form-control" placeholder="enter mail id" name="email" id="email" required onChange="Validata();">
                    </div>
					<span id="msg3" style="color:red;"></span>
<script>
function Validata() 
{
    var val = document.getElementById('email').value;
	 if(val==""){
	    document.getElementById('msg3').innerHTML="** please fill email";
		return false;
		}

    if (!val.match(/([a-zA-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg3').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>

					  <div class="form-group">
					  <span class="lnr lnr-user"></span>
                        <label>Enter address</label>
   <textarea type="text" class="form-control" placeholder="enter address" name="address" id="address" required onChange="Vallawadd();"></textarea>
                    </div>
					<span id="msgl6" style="color:red;"></span>
<script>
function Vallawadd() 
{
    var val = document.getElementById('address').value;
	 if(val==""){
	    document.getElementById('msgl6').innerHTML="** please fill address";
		return false;
     }
		}
</script>
                     <div class="form-group">
					 <span class="lnr lnr-user"></span>
                     <label>Enter State</label>
            <select class="form-control" id="state-dropdown" name="state" required oninvalid="this.setCustomValidity('Select State')" oninput="this.setCustomValidity('')">
                    <option value="">Select State</option>
                    <?php
                    require_once "../connect.php";
                    $result = mysqli_query($con, "SELECT * FROM tbl_state");
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <option value="<?php echo $row['s_id']; ?>"><?php echo $row["sname"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
	</div>
                    <div class="form-group">
                     <span class="lnr lnr-user"></span>
                     <label>Enter district</label>
                    <select class="form-control" id="district-dropdown" name="district" required oninvalid="this.setCustomValidity('Select district')"
                                           oninput="this.setCustomValidity('')">
            </select>
    </div>
    <script>
            $(document).ready(function() {
                $('#state-dropdown').on('change', function() {
                    var s_id = this.value;
                    $.ajax({
                        url: "states.php",
                        type: "POST",
                        data: {
                            s_id: s_id
                        },
                        cache: false,
                        success: function(result){
                            $("#district-dropdown").html(result);
                        }
                    });
                });
            });
        </script>
	<span id="msgl8" style="color:red;"></span>
	<script>
 function Vallawd()
{
 var val = document.getElementById('district').value;
    if(val==""){
	    document.getElementById('msgl8').innerHTML="** please select district";
		return false;
		}
    }
		</script>
	<div class="form-group">
                        <label>Upload id proof</label>
                       <input type="file" class="form-control" placeholder="upload your id proof" name="file" id="file"  required onChange="return fileValide();">
                    </div>
					 <script>
        function fileValide() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
					
					<div class="form-group">
                        <label>Upload photo</label>
                        <input type="file" class="form-control" placeholder="upload your phpto" name="file1" id="file" required onChange="return fileValid();">
                    </div>
					 <script>
        function fileValid() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
    <div class="form-group">
					 <span class="lnr lnr-user"></span>
                        <label>Enter specialization</label>
                    <select name="specialization" id="specialization" class="form-control" required onChange="Vallawdq();">
      <option value="">select</option>
      <?php 
      include '../connect.php';
      $result1 = mysqli_query($con, "SELECT * from specification_tbl");
      while($row1=mysqli_fetch_array($result1)){
      ?>
      <option value="<?php echo $row1['spec_id'];?> "><?php echo $row1['category'];?></option>

   <?php } ?>
    </select>
	</div>
	<span id="msgl8" style="color:red;"></span>
	<script>
function Vallawdq()
{
 var val = document.getElementById('specialization').value;
    if(val==""){
	    document.getElementById('msgl8').innerHTML="** please select specialization";
		return false;
		}
    }
		</script>
					<div class="form-group"> 
					<span class="lnr lnr-user"></span>
                        <label>Enter experienced year</label>
                        <input type="text" class="form-control" placeholder="enter the experienced year" name="experiencedyears" id="experiencedyears"  required onChange="Valee();">
                    </div>
<span id="msgle" style="color:red;"></span>
<script>
function Valee() 
{
    var val = document.getElementById('experiencedyears').value;
    if(val==""){
	    document.getElementById('msgle').innerHTML="** please fill experienced years";
		return false;
		}
    if (!val.match(/^[0-9]{1,9}$/)) 
    {
        document.getElementById('msgle').innerHTML="Only Numbers are allowed";
	
		
		            document.getElementById('experiencedyears').value = "";
        return false;
    }
document.getElementById('msgle').innerHTML=" ";
    return true;
}
</script>
					<!--<div class="form-group">
					 <span class="lnr lnr-user"></span>
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="enter username" name="username" id="username" required onChange="Vaue();">
                    </div>
					<span id="msguse" style="color:red;"></span>
<script>		
function Vaue() 
{
    var val = document.getElementById('username').value;
	 if(val=="")
	 {
	    document.getElementById('msguse').innerHTML="** please fill username";
		return false;
		}
    if (!val.match(/^[A-Za-z\ ]{3,}$/)) 
    {
        document.getElementById('msguse').innerHTML="Only alphabets spaces are allowed!!";
		            document.getElementById('username').value = "";
        return false;
    }
document.getElementById('msguse').innerHTML=" ";
    return true;
}
</script>-->
					<div class="form-group">
					<span class="lnr lnr-user"></span>
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="enter password" name="password" id="password" required onChange="return Validpp();">
                    </div>
					<span id="msgusee" style="color:red;"></span>
					<script>
function Validpp() 
{
    var val = document.getElementById('password').value;
	 if(val==""){
	    document.getElementById('msgusee').innerHTML="** please fill password";
		return false;
		}

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msgusee').innerHTML="Password should contain atleast 6 characters and atleast a special character and integers";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msgusee').innerHTML=" ";
    return true;
}
</script>
                    <input type="submit" name="b"  value="Add counsellor" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">
                </form>
            </div>
   
            <?php
								include '../connect.php';
if(isset($_POST['b']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$address=$_POST['address'];
$state=$_POST['state'];
$district=$_POST['district'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$file);
$file1=$_FILES['file1']['name'];
move_uploaded_file($_FILES['file1']['tmp_name'],"../uploads/".$file1);
$specialization=$_POST['specialization'];
$experiencedyears=$_POST['experiencedyears'];
// $username=$_POST['username'];
$password=$_POST['password'];
 $s1 = "SELECT * FROM tbl_login WHERE username = '$email'";
    $result1 = mysqli_query($con, $s1);
    $row1=mysqli_fetch_assoc($result1);
    $uname= isset($row1['username']) ? $row1['username'] : '';
	if ($uname!="") 
            {
            echo "<script>alert('please enter another username'); window.location.href='addcounsellor.php';</script>";
            }
            else
			{

            $sq = "INSERT INTO tbl_login (username,password,type1,status) VALUES ('$email','$password','counsellor','1')";
            mysqli_query($con, $sq);
            $sqll = "SELECT * FROM tbl_login WHERE username = '$email' and password = '$password' and type1 = 'counsellor'";
            $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $email=$row['username'];
             $loid=$row['loginid'];
             $sql = "INSERT INTO counsellors (name,age,gender,phonenumber,email,address,state,district,idproof,specialization,experiencedyears,loginid,status,file)values('$name',$age,'$gender','$phonenumber','$email','$address','$state','$district','$file','$specialization','$experiencedyears','$loid',1,'$file1')";
            mysqli_query($con, $sql);
            // echo "<script> alert('Counsellor Added'); window.location.href='addcounsellor.php';</script>";
            header("location:../src/verifymail2.php?email=$email");
            ob_end_flush();
            }
        }
       
}
?>
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

    <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2022 Women_empowerment . All Rights Reserved 
                    <a href="http://w3layouts.com/"> </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="js/SimpleChart.js"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6",
                    Y: 300.00
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function () {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="js/rumcaJS.js"></script>
    <script src="js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="js/moment.min.js"></script>
    <script src="js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="js/simplyCountdown.js"></script>
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>
</html>

<?php
}
else
header('location:../login/login.php');
?>