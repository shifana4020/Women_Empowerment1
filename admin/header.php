<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
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
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
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
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="adminindex.php">Admin Panel</a>
                </h1>
                <span></span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="adminindex.php">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
               <li>
                    <a href="#homeSubme" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        User Request
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubme">
                        <li>
                            <a href="userapproval.php">User Approval</a>
                        </li>
                        <li>
                            <a href="slotapproval.php">Counselling Approval</a>
                        </li>
                        <li>
                            <a href="cleaveapproval.php">Counsellor leave Approval</a>
                        </li>
                    </ul>
                    <li>
                        <a href="addcasecategory.php"><i class="fas fa-th-large"></i>
                            Category For Users</a>
                        </li>
				 <li>
                    <a href="#homeSub" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Lawyers
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSub">
                     <li>
                        <a href="addspecializationlawyer.php">Add specialization</a>
                        </li>
                        <li>
                            <a href="addlawyers.php">Add Lawyers</a>
                        </li>
                        <li>
                            <a href="viewlawyers.php">View Lawyers</a>
                       
                </li>
				</ul>
                <li>
                    <a href="#homeSubb" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Counsellor
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubb">
                     <li>
                            <a href="addspecialization.php">Add specialization</a>
                        </li>
                        <li>
                            <a href="viewspecialization.php">View specialization</a>
                        </li>
                        <li>
                            <a href="addcounsellor.php">Add Counsellor</a>
                        </li>
                        <li>
                            <a href="viewcounsellor.php">View Counsellor</a>
                       
                </li>
				</ul>
                <!-- <li>
                    <a href="#homeSubba" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Payment
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubba">
                     <li>
                            <a href="servicechargecrime.php">Crime Report Service Charge</a>
                        </li>
                        <li>
                            <a href="viewspecialization.php">View payment</a>
                        </li> 
                </li>
				</ul> -->
                <li>
                    <a href="#homeSubbbm" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Assign & View
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubbbm">
                        <li>
                            <a href="viewcases.php">New Cases</a>
                        </li>
                        <li>
                            <a href="viewcounseling.php">New Counselling Request</a>
                       
                </li>
				</ul>       
			   <li>
                    <a href="#homeSubbb" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Status
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubbb">
                        <li>
                            <a href="viewstatus.php">View Case Status</a>
                        </li>
                        <li>
                            <a href="viewcstatus.php">View Counselling Status</a>
                       
                </li>
				</ul> 
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Rights for women
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="addrights.php">Add Rights</a>
                        </li>
                        <li>
                            <a href="viewrights.php">View Rights</a>
                       
                </li>
				</ul>
				 <li>
                    <a href="#homeSubmen" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Awareness programs 
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubmen">
                        <li>
                            <a href="addawarenessprograms.php">Add Awareness programs</a>
                        </li>
                        <li>
                            <a href="viewawarenessprograms.php">View Awareness Programs</a>
                       
                </li>
				</ul> 
                <li>
                    <a href="#homeSubmek" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        User History
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmek">
                        <li>
                            <a href="totalcaseshistory.php">Total Cases History</a>
                        </li>
                        <li>
                            <a href="totalbookinghistory.php">Total Booking History</a>
                        </li>
                        <li>
                            <a href="totalleavehistory.php">Total Counsellors Leave History</a>
                        </li>
                    </ul>          
                <!-- <li>
                    <a href="pricing.html">
                        <i class="fas fa-table"></i>
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="far fa-map"></i>
                        Maps
                    </a>
                </li>-->
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                      
                    </div>
                    <!-- Search-from -->
                   
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            
                            <div class="dropdown-menu top-grid-scroll drop-1">
                               
                                
                                    
                              
                                
                                <div class="dropdown-divider"></div>
                                
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                           
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">John Thomas</h3>
                                        <a href="mailto:info@example.com">johnthomas@gmail.com</a>
                                    </div>
                                </div>
                                 <h4>
                                        
                                <a href="changepassword.php" class="dropdown-item mt-3">
                                    <h4>
                                       Change password</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                   