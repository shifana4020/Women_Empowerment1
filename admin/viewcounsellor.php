<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>
<?php
include("header.php");
?>
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

  <div class="outer-w3-agile mt-2">
                    <h2 class="tittle-w3-agileits mb-4">View Counsellors</h2>
                    <table class="table table-bordered table-striped" width="700">
                        <thead>
                            <tr>
                            <th>Name,<br>
                                Age</th>
								 <th>Gender</th>
								 <th>Contact</th>
								 <th>Email</th>
								  <th>Address</th>
                                  <th>State,<br>
								    District</th>
									 <th>Id Proof</th>
									 <th>photo</th>
								    <th>Specialization</th>
									   <th>Exp.Years</th>
                                 <th class="text-center"align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
						
include '../connect.php';
$sql3="select * from counsellors WHERE status=1";
$res = mysqli_query($con,$sql3);
//$r = mysqli_fetch_assoc($res);
while($r=mysqli_fetch_array($res))
{
$id=$r['specialization'];
$sql1="select * from specification_tbl where spec_id=$id and status='active'";
$res1=mysqli_query($con,$sql1);
$r1=mysqli_fetch_array($res1);
$if=$r['state'];
$sql1s="select * from tbl_state where s_id=$if";
$res1s=mysqli_query($con,$sql1s);
$r1s=mysqli_fetch_array($res1s);
$idf=$r['district'];
$sql1q="select * from tbl_district where d_id=$idf";
$res1q=mysqli_query($con,$sql1q);
$r1q=mysqli_fetch_array($res1q);
    ?>
	<tr><td><?php echo $r['name'];?><br>
    <b>age:</b><?php echo $r['age'];?></td>
     <td><?php echo $r['gender'];?></td>
	 <td><?php echo $r['phonenumber'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $r['address'];?></td>
     <td><?php echo $r1s['sname'];?></br>
     <?php echo $r1q['dname'];?></td>
	 <td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100"></td>
	 <td><img src="../uploads/<?php echo $r['file'];?>" width="100" height="100"></td>
     <td><?php echo $r1['category'];?></td>
	 <td><?php echo $r['experiencedyears'];?></td>
                <td><a style="color:#F63" href="deletecounsellor.php?id=<?php echo $r['loginid'];?>"><b>Blocked</a></td></tr>
                      <?php
}
?></tbody>
                    </table>
</div>
<div class="outer-w3-agile mt-2">
                    <h2 class="tittle-w3-agileits mb-4">View Blocked Counsellors</h2>
                    <table class="table table-bordered table-striped" width="700">
                        <thead>
                            <tr>
                                <th>Name,<br>
                                Age</th>
								 <th>Gender</th>
								 <th>Contact</th>
								 <th>Email</th>
								  <th>Address</th>
                                  <th>State,<br>
								    District</th>
									 <th>Id Proof</th>
									 <th>photo</th>
								    <th>Specialization</th>
									   <th>Exp.Years</th>
                                 <th class="text-center"align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
						
include '../connect.php';
$sql3="select * from counsellors WHERE status=0";
$res = mysqli_query($con,$sql3);
//$r = mysqli_fetch_assoc($res);
while($r=mysqli_fetch_array($res))
{
    $id=$r['specialization'];
    $sql1="select * from specification_tbl where spec_id=$id";
$res1=mysqli_query($con,$sql1);

$r1=mysqli_fetch_array($res1);
$if=$r['state'];
$sql1s="select * from tbl_state where s_id=$if";
$res1s=mysqli_query($con,$sql1s);
$r1s=mysqli_fetch_array($res1s);
$idf=$r['district'];
$sql1q="select * from tbl_district where d_id=$idf";
$res1q=mysqli_query($con,$sql1q);
$r1q=mysqli_fetch_array($res1q);
    ?>
	<tr><td><?php echo $r['name'];?><br>
   <b> age:</b><?php echo $r['age'];?></td>
     <td><?php echo $r['gender'];?></td>
	 <td><?php echo $r['phonenumber'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $r['address'];?></td>
     <td><?php echo $r1s['sname'];?><br>
	 <?php echo $r1q['dname'];?></td>
	 <td><img src="../uploads/<?php echo $r['idproof'];?>" width="85" height="100"></td>
	 <td><img src="../uploads/<?php echo $r['file'];?>" width="85" height="100"></td>
     <td><?php echo $r1['category'];?></td>
	 <td><?php echo $r['experiencedyears'];?></td>
                <td><a style="color:#F63" href="unblockcounsellors.php?id=<?php echo $r['loginid'];?>"><b>Unblocked</a></td></tr>
                      <?php
}
?></tbody>
                    </table>
					<!--<a href="adminindex.php">Back to Home</a>-->
                </div>

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