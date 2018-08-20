<?php 
include_once("includes/connect.php");
session_start();
$fetchQuery="SELECT * FROM tradingpolicies where userName='".$_SESSION['userName']."'";
$result1 = mysql_query($fetchQuery);

$loginName=$_SESSION['userName'];
		if(isSet($_POST['pName']) && isSet($_POST['pShares']) && isSet($_POST['pAmmount']) && isSet($_POST['pProfit']) && isSet($_POST['pLoss']) && isSet($_POST['company']) && isSet($_POST['sDate']))
		{
			$dateFormat = "g:i a";
			$actualDateDisplay = date($dateFormat,time());
			$tempDate = $_POST['sDate'];
			$eDate=date( "Y-m-d", strtotime( "$tempDate+30 day" ));
			$endDate=date( "Y, m, d", strtotime( "$tempDate" ));
			$_SESSION['endDate']=$endDate;
			$eDate=$eDate;
			$sDate = $_POST['sDate'];
			$currentDate=date("Y-m-d") ;
			if($sDate < $currentDate)
			{
				$remainingTime=0;
			}
			else
			{
				$remainingTime=0;
			}
			$name=$_POST['pName'];
			$ammount=$_POST['pAmmount'];
			$shares=$_POST['pShares'];
			$profit=$_POST['pProfit'].'%';
			$loss=$_POST['pLoss'].'%';
			$strategy='all';
			$compTicker=$_POST['company'];
			$profitLoss=0.00;
			$isComplete=false;
			$query = "INSERT INTO tradingpolicies  VALUES ('','$loginName','$compTicker','$name','$ammount','$shares','$profit','$loss','$strategy','$sDate','$eDate','$remainingTime','$profitLoss','$isComplete')";
			$data = mysql_query ($query)or die(mysql_error());
			if($data)
			{
				$_Session['compRegAlert']="Congratulations!! New policy added successfully.";
			}
			else
			{
				$_Session['compRegAlert']="Error!! Please try again.";
			}
		}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Virtual Stock Exchange</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
</head>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on +92 111 222 333 or info@virtualExchange.com.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="loginRegister.php"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <img src="img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trading<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="img/template-easy-customize.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Available Features</h5>
                                                        <ul>
                                                            <li><a href="trading.php">Trading Screen</a>
                                                            </li>
                                                            <li><a href="marketSummary.php">Market Summary</a>
                                                            </li>
                                                            <li><a href="marketGraph.php">Graphical View</a>
                                                            </li>
                                                            <li><a href="marketTrends.php">Market Trends</a>
                                                            </li>
                                                           </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Trading Instructions</h5>
                                                        <ul>
                                                            <li><a href="404.php">How to trade??</a>
                                                            </li>
                                                            <li><a href="404.php">Market Overview</a>
                                                            </li>
															<li><a href="404.php">Listed Companies</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Simulation <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="img/template-homepage.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Services</h5>
                                                        <ul>
															<li><a href="allServices.php">All Services</a>
                                                            </li>
                                                            <li><a href="getQuotes.php">Get Real Time Quotes</a>
                                                            </li>
                                                            <li><a href="getPrediction.php">Get Next Day Prediction</a>
                                                            </li>
                                                            <li><a href="getHistoricData.php">View Historic Data</a>
                                                            </li>
                                                            <li><a href="getGraph.php">Graphical View</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>About</h5>
                                                        <ul>
                                                            <li><a href="404.php">How it works</a>
                                                            </li>
                                                            <li><a href="404.php">Prediction Techniques</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
								
								<li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                                    <ul class="dropdown-menu">  <li><a href="loginAdminChecker.php">Admin</a>
										<li><a href="loginChecker.php">User</a>
                                      
                                        </li>
                                     </ul>
                                </li>
                                
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact2.html">Click here to navigate</a>
                                        </li>
                                     </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>
		
		
		<section>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Set your Trading Plan</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="index.php">Home</a>
                            </li>
                            <li>Autonomic Trading</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

			
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

				   <div class="col-md-9" id="customer-orders">
				   
				   			
								<div class="col-md-9">

                        <!-- Simple boxes -->
						<?php
						if(isSet($_POST['pName']) && isSet($_POST['pShares']) && isSet($_POST['pAmmount']) && isSet($_POST['pProfit']) && isSet($_POST['pLoss']) && isSet($_POST['sDate']))
						{
											echo '<div class="alert alert-danger alert-dismissible" role="alert">';
											echo '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>';
											echo '</button>';
											echo $_Session['compRegAlert'];
											echo '</div>';
										}
						
						?>
                        <div class="row">
                            
                           <form role="form" name="frmUser"  method="post" action="autoTrade.php">
												<label><h4>Name</h4></label>
												<input type="text" name="pName" class="form-control" required  placeholder="give any name to your plan.">
												<label><h4>Amount (Rs./-)</h4></label><br>
												<input type="number" min="10000" name="pAmmount" class="form-control" required  placeholder="how much money you can invest?">
												<?php
													 include_once('class.yahoostock.php');
													 ini_set('max_execution_time', 300);
													 $conn = new mysqli('localhost', 'root', '', 'yahoofinance') 
													 or die ('Cannot connect to db');
													 $result = $conn->query("SHOW TABLES");
												?>
												<label><h4>Company</h4></label>
												<select id="sel" name="company" id="company" class="form-control">
													<option  value="Select a company">Select a company</option>
														<?php
														 while ($row = $result->fetch_assoc()) 
														{
															unset($id, $name);
															$id = $row['Tables_in_yahoofinance'];
															echo '<option value="'.$id.'">'.$id.'</option>';
														}
														?>
												</select><br />
												<label><h4>Shares</h4></label>
												<input type="number" min="1000" name="pShares" class="form-control" required  placeholder="how many shares you wanna sell?">
												<label><h4>Minimum Profit</h4></label>
												<input type="number" min="0" max="100" name="pProfit" class="form-control" required  placeholder="how much minimum profit you wanna earn?">
												<label><h4>Maximum Loss</h4></label>
												<input type="number" min="0" max="100" name="pLoss" class="form-control" required  placeholder="how much loss you can bear?">
												<label><h4>Date</h4></label>
												<input type="date" name="sDate" class="form-control" min="2015-09-01" max="2016-06-05" required  placeholder="starting date?">
												<br>
												
										   <button type="submit" name="submit" value="Plan" class="btn btn-template-main">Set my plan</button>
											</form>
                        <!-- /.tabs -->

                    </div>
                </div>

            </div>  <!-- /.col-md-9 -->
					
					
					

                    <!-- *** LEFT COLUMN END *** -->

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Customer section</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active">
                                        <a href="autoTrade.php"><i class="fa fa-heart"></i>Autonomic Trading</a>
                                    </li>
                                    <li>
                                        <a href="userPortfolio.php"><i class="fa fa fa-comments"></i> My Portfolio</a>
                                    </li>
									<li>
                                        <a href="tradeResults.php"><i class="fa fa-heart"></i>Trade Results</a>
                                    </li>
                                    
                                    <li>
                                        <a href="myAccount.php"><i class="fa fa-user"></i> My account</a>
                                    </li>
                                    <li>
                                        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
						
						<div class="banner">
                            <a href="">
                                <img src="img/template-easy-customize-less.png" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
						
						
						<div class="banner">
                            <a href="">
                                <img src="img/template-easy-customize-less.png" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <!-- *** RIGHT COLUMN END *** -->

                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->

        
        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->
        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>aaaaaaaaa<br>bbbbbbbb<br>ccccccc</p>

                    <hr>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->


                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Virtul Stock Exchange</strong>
                        <br>8/39 GT Road
                        <br>Rachna College
                        <br>Gujranwala
                        <br>
                        <strong>Pakistan</strong>
                    </p>

                    <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
                            <a href="#">
                                <img src="img/ser4.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/ser4.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/ser4.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/ser4.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/ser4.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/ser4.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2015. Virtual Stock Exchange</p>
                    <p class="pull-right">Designed by <a>Group Members</a> with support from <a>Google</a> 
                    </p>
                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
</body>
</html>
