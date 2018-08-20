<?php 
include ("includes/connect.php");

session_start();
$fetchQuery="SELECT * FROM portfolio where userName='".$_SESSION['userName']."'";
$result1 = mysql_query($fetchQuery);

//session_start();
//echo 'Welcome '.$_SESSION['userName'].'<br>';
//echo '<a href="logout.php">Logout</a>';
	function calculateTransactionCount()
	{
		try
		{
			$sql = "SELECT COUNT(volume) as volumeCount FROM portfolio where userName='".$_SESSION['userName']."'";
			$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$transactionCount= $row['volumeCount'];
				$_SESSION['transactionCount']=$transactionCount;
			}
		}
		catch(Exception $e)
		{
			echo 'transaction error : '.$e->getMessage();
		}
	}
	
	function calculateSales()
	{
		try
		{
			$sum=0;
			$sql = "SELECT volume,price FROM portfolio where userName='".$_SESSION['userName']."'";
			$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$sum+= ($row['volume']*$row['price']);
			}
			$_SESSION['sales']=$sum;
		}
		catch(Exception $e)
		{
			echo 'transaction error : '.$e->getMessage();
		}
	}
	
	function calculateVolume()
	{
		try
		{
			$num1=0;
			$num2=0;
			$sql = "SELECT volume FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='buy'";
			$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$num1+= $row['volume'];
			}
			$sql2 = "SELECT volume FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='sell'";
			$retval2 = mysql_query($sql2);
			while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC))
			{
				$num2+= $row2['volume'];
			}
			$volume=$num1-$num2;
			$_SESSION['volume10']=$volume;
			if($_SESSION['volume10']<0)
				$_SESSION['volume10']=0;
		}
		catch(Exception $e)
		{
			echo 'transaction error : '.$e->getMessage();
		}
		
	}
	
	function stockTable()
	{
		try
		{
			$sql = "select distinct ticker from portfolio where userName='".$_SESSION['userName']."'";
			$retval = mysql_query($sql);
			$i=0;
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$ticker[$i]= $row['ticker'];
				$i++;
			}
			$ticker1=$ticker[0];
			$ticker2=$ticker[1];
			$_SESSION['tick1']=$ticker1;
			$_SESSION['tick2']=$ticker2;
			$num1=0;
			$num2=0;
			$sql = "SELECT volume FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='buy' && ticker='".$ticker1."'";
			$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$num1+= $row['volume'];
			}
			$sql2 = "SELECT volume FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='sell' && ticker='".$ticker1."'";
			$retval2 = mysql_query($sql2);
			while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC))
			{
				$num2+= $row2['volume'];
			}
			$com1Stock=$num1-$num2;
			if($com1Stock<0)
			{
				$com1Stock=0;
			}
			$_SESSION['stock1']=$com1Stock;
			
			$temp1=0;
			$temp2=0;
			$sql = "SELECT volume FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='buy' && ticker='".$ticker2."'";
			$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$temp1+= $row['volume'];
			}
			$sql2 = "SELECT volume FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='sell' && ticker='".$ticker2."'";
			$retval2 = mysql_query($sql2);
			while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC))
			{
				$temp2+= $row2['volume'];
			}
			$com2Stock=$temp1-$temp2;
			if($com2Stock<0)
			{
				$com2Stock=0;
			}
			$_SESSION['stock2']=$com2Stock;
			$volume=$com1Stock-$com2Stock;
			$_SESSION['volume']=$volume;
			
			$sql = "SELECT COUNT(volume) as volumeCount FROM portfolio where userName='".$_SESSION['userName']."' && ticker='".$ticker1."'";
			$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$transactionCount1= $row['volumeCount'];
				$_SESSION['transactionCount1']=$transactionCount1;
			}
		
			$sql = "SELECT COUNT(volume) as volumeCount FROM portfolio where userName='".$_SESSION['userName']."' && ticker='".$ticker2."'";
			$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$transactionCount2= $row['volumeCount'];
				$_SESSION['transactionCount2']=$transactionCount2;
			}	
		}
		catch(Exception $e)
		{
			echo 'transaction error : '.$e->getMessage();
		}
		
	}
	
	function main()
	{
		calculateTransactionCount();
		calculateSales();
		calculateVolume();
		//stockTable();
	}
	main();



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
                        <h1>My Portfolio</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="index.php">Home</a>
                            </li>
							<li><a href="trading.php">Trade Screen</a>
                            </li>
							<li><a href="bidsDetails.php">My Bids</a>
                            </li>
                            <li>My Portfolio</li>
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

                        <div class="heading">
                            <h2>Miscaleneous Details</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="box-simple">
                                    <div class="icon">
                                        <i class="fa fa-bar-chart-o fa-2x"></i>
                                    </div>
                                    <h3>Transactions</h3>
                                    <p><?php echo '<h2><span class="counter">'.$_SESSION['transactionCount'].'</span></h2>';?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-simple">
                                    <div class="icon">
                                        <i class="fa fa-shopping-cart fa-2x"></i>
                                    </div>
                                    <h3>Total Sales</h3>
                                    <p><?php echo '<h2><span class="counter">'.$_SESSION['sales'].'</span></h2>';?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-simple">
                                    <div class="icon">
									<i class="fa fa fa-comments fa-2x"></i>
                                   </div>
                                    <h3>Shares</h3>
									<p><?php echo '<h2><span class="counter">'.$_SESSION['volume10'].'</span></h2>';?> </p>
                                
                                </div>
                            </div>
							
							<div class="heading">
								<h2>My Transactions Details</h2>
							</div>
                            <!-- /.col-md-6 -->

                           <div class="tabs">
                            <ul class="nav nav-pills nav-justified">
                                <li class=""><a href="#tab2-1" data-toggle="tab">My Sales</a>
                                </li>
                                <li class=""><a href="#tab2-2" data-toggle="tab">My Purchases</a>
                                </li>
                                <li class="active"><a href="#tab2-3" data-toggle="tab">My Transactions</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane" id="tab2-1">
                                   
											<p>
												<div class="table-responsive">
												<table class="table table-hover">
												<thead>
													<tr>
														<th>Symbol</th>
														<th>Volume</th>
														<th>Price</th>
														<th>Type</th>
														</tr>
												</thead>
												<tbody>
												  
												  <?php
													$i=0;
													$sales="SELECT * FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='sell'";
													$result2 = mysql_query($sales);

													
													while($row1 = mysql_fetch_array($result2))
													{
														?>
														<td><?php echo $row1["ticker"]; ?></td>
														<td><?php echo $row1["volume"]; ?></td>
														<td><?php echo $row1["price"]; ?></td>
														<td><?php echo $row1["transactionType"]; ?></td>
														</tr>
														<?php
														$i++;
														}
													?>
												</tbody>
											</table>
										</div>
									</p>
										
								   
                                </div>
                                <!-- /.tab -->
                                <div class="tab-pane" id="tab2-2">
										 <p>
												<div class="table-responsive">
												<table class="table table-hover">
												<thead>
													<tr>
														<th>Symbol</th>
														<th>Volume</th>
														<th>Price</th>
														<th>Type</th>
														</tr>
												</thead>
												<tbody>
												  
												  <?php
													$i=0;
													$sales="SELECT * FROM portfolio where userName='".$_SESSION['userName']."' && transactionType='buy'";
													$result2 = mysql_query($sales);

													
													while($row1 = mysql_fetch_array($result2))
													{
														?>
														<td><?php echo $row1["ticker"]; ?></td>
														<td><?php echo $row1["volume"]; ?></td>
														<td><?php echo $row1["price"]; ?></td>
														<td><?php echo $row1["transactionType"]; ?></td>
														</tr>
														<?php
														$i++;
														}
													?>
												</tbody>
											</table>
										</div>
									</p>
                                    
                                </div>
                                <!-- /.tab -->
                                <div class="tab-pane active" id="tab2-3">
                                    
										<p>
												<div class="table-responsive">
												<table class="table table-hover">
												<thead>
													<tr>
														<th>Symbol</th>
														<th>Volume</th>
														<th>Price</th>
														<th>Type</th>
														</tr>
												</thead>
												<tbody>
												  
												  <?php
													$i=0;
													
													while($row1 = mysql_fetch_array($result1))
													{
														?>
														<td><?php echo $row1["ticker"]; ?></td>
														<td><?php echo $row1["volume"]; ?></td>
														<td><?php echo $row1["price"]; ?></td>
														<td><?php echo $row1["transactionType"]; ?></td>
														</tr>
														<?php
														$i++;
														}
													?>
												</tbody>
											</table>
										</div>
									</p>

                                </div>
                                <!-- /.tab -->
                               <!-- /.tab -->
                            </div>
                        </div>
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
                                        <a href="userPortfolio.php"><i class="fa fa fa-comments"></i> My Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="autoTrade.php"><i class="fa fa-heart"></i>Autonomic Trading</a>
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
