<?php 
include_once("includes/connect.php");
session_start();
if(isSet($_POST['companyType']))
		{
			$type=$_POST['companyType'];
			$query = "INSERT INTO companytype  VALUES ('','$type')";
			$data = mysql_query ($query)or die(mysql_error());
			if($data)
			{
				$_Session['compCatAlert']="Congratulations!! New category added successfully.";
			}
			else
			{
				$_Session['compCatAlert']="Error!! Please try again.";
			}
		}
		
		if(isSet($_POST['cName']) && isSet($_POST['type']) && isSet($_POST['cStock']) && isSet($_POST['cPrice']) && isSet($_POST['cEmail']) && isSet($_POST['cAddress']) && isSet($_POST['cPhone']) && isSet($_POST['cDate']))
		{
			$name=$_POST['cName'];
			$type=$_POST['type'];
			$stock=$_POST['cStock'];
			$price=$_POST['cPrice'];
			$email=$_POST['cEmail'];
			$address=$_POST['cAddress'];
			$phone=$_POST['cPhone'];
			$date=$_POST['cDate'];
			$changedPrice=0.00;
			$percentageChange=0.00;
			$len=strlen($name);
			$ticker='';
			for($i=0;$i<=($len/2);$i++)
			{
				$ticker=$ticker.$name[$i];
			}
			$query = "INSERT INTO companies  VALUES ('','$name','$type','$ticker','$stock','$price','$changedPrice','$percentageChange','$email','$address','$phone','$date')";
			$data = mysql_query ($query)or die(mysql_error());
			if($data)
			{
				$_Session['compRegAlert']="Congratulations!! New company registered successfully.";
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

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Admin Portfolio</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a>
                            </li>
                            <li>Admin Portfolio</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">

                <div class="row">
                    <div class="col-md-3">
                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->

                        <div class="panel panel-default sidebar-menu with-icons">

                            <div class="panel-heading">
                                <h3 class="panel-title">Others</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="addCompany.php">Add Companies</a>
                                    </li>
                                    <li><a href="viewUsers.php">Registered Users</a>
                                    </li>
                                    <li><a href="adminPortfolio.php">Registered Companies</a>
                                    </li>
                                    <li><a href="logout.php">Logout</a>
                                    </li>
                                    </li>
                            </div>
                        </div>


                        <!-- *** MENUS AND FILTERS END *** -->
                    </div>

                    <div class="col-md-9">
								 

					<!-- /.row -->

					 <h3>Add details about companies!! </h3> 

                        <div class="tabs">
                            <ul class="nav nav-pills nav-justified">
                                <li class=""><a href="#tab2-1" data-toggle="tab">Add New Category</a>
                                </li>
								</li>
								<li class=""><a href="#tab2-2" data-toggle="tab">Add New Company</a>
                                </li>
                                
                                
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane" id="tab2-1">
								
                                     <?php
										if(isSet($_POST['companyType']))
										{
											echo '<div class="alert alert-danger alert-dismissible" role="alert">';
											echo '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>';
											echo '</button>';
											echo $_Session['compCatAlert'];
											echo '</div>';
										}
									?>
									<form role="form" name="frmUser"  method="post" action="addCompany.php">
										<div class="message"></div>
										<div class="form-group">
										   <label><h3>Company Type</h3></label>
										   <input type="text" name="companyType" class="form-control" required placeholder="Write a Category of your company" >
										</div><!--end of form-group-->				<div class="form-group">
										 </div><!---end of form-group--->
										<br>
										<button type="submit" name="submit" value="Submit" class="btn btn-template-main">Done</button>
									 </form>
									
                                </div>
								
								<div class="tab-pane" id="tab2-2">
                                   
									<?php
										if(isSet($_POST['cName']) && isSet($_POST['type']) && isSet($_POST['cStock']) && isSet($_POST['cPrice']) && isSet($_POST['cEmail']) && isSet($_POST['cAddress']) && isSet($_POST['cPhone']) && isSet($_POST['cDate']))
										{
											echo '<div class="alert alert-danger alert-dismissible" role="alert">';
											echo '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>';
											echo '</button>';
											echo $_Session['compRegAlert'];
											echo '</div>';
										}
									?>
                            
                                    
									 <form role="form" name="frmUser"  method="post" action="addCompany.php">
										<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
										<div class="form-group">
										   <label><h3>Company Name</h3></label>
										   <input type="text" name="cName" class="form-control" required >
										   
										   <label><h3>Company Type</h3></label>
											<select name="type" id="type" class="form-control">
											<?php $conn = new mysqli('localhost', 'root', '', 'example') or die ('Cannot connect to db');
											$result = $conn->query("select ID, Type from companytype");
											while ($row = $result->fetch_assoc()) 
											{ 
											?>
											<option value="<?php echo $row['Type']; ?>"><?php echo $row['Type']; ?></option>
											<?php 
												}
											?>
											</select>
										
										   <label><h3>Total Stock</h3></label>
										   <input type="number" name="cStock" min=1 class="form-control" required>
										
										   <label><h3>Unit Price</h3></label>
										   <input type="number" name="cPrice" min=1 class="form-control" required>
										
										   <label><h3>Email</h3></label>
										   <input type="email" name="cEmail" class="form-control" required>
										
										   <label><h3>Address</h3></label>
										   <input type="text" name="cAddress" class="form-control" required>
										
										   <label><h3>Phone #</h3></label>
										   <input type="number" name="cPhone" class="form-control" required>
										   
										   <label><h3>DOC</h3></label>
										   <input type="date" name="cDate" class="form-control" required>
										   <br>
										   <button type="submit" name="submit" value="Register" class="btn btn-template-main">Register</button>
									</form>
									
									
                                </div>
                                
                                <!-- /.tab -->
                                <!-- /.tab -->
                                <!-- /.tab -->
                               <!-- /.tab -->
                            </div>
                        </div>
                       
                    
					<!-- /.tabs -->

                    </div>
                </div>

            </div>
            <!-- /.container -->

        </section>

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