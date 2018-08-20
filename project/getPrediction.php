<?php
//SELECT * FROM aapl WHERE date BETWEEN '2016-02-19' AND '2016-03-05 23:59:59' ORDER BY id ASC limit 14
include ("includes/connect1.php");
	ini_set('max_execution_time', 300);
	 $fetchQuery = "SHOW TABLES";
	$result1 = mysql_query($fetchQuery);
	
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
															<li><a href="marketWatch.php">Market Watch</a>
                                                            </li>
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
                                    <ul class="dropdown-menu">
									
						
									  <li><a href="loginAdminChecker.php">Admin</a>
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
                        <h1>Stock Price Prediction</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a>
                            </li>
							 <li><a href="getResults.php">View Results</a>
                            </li>
                            <li>Future Stock Prices</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix">
                        <section>
							
				  <?php
					include_once('class.yahoostock.php');
     				ini_set('max_execution_time', 300);
     				$conn = new mysqli('localhost', 'root', '', 'yahoofinance') 
     				or die ('Cannot connect to db');
     				$result = $conn->query("SHOW TABLES");
				  ?>
				      <form action="getPrediction.php" method="GET">
					  
						<div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_1">Company</label>
                                            <select name="company" id="company" class="form-control" required>
												<option id="op"  value="Select a company" >Select a company</option>
													<?php
														  while($row1 = mysql_fetch_array($result1))
														  {
															unset($id, $name);
															$id = $row1['Tables_in_yahoofinance'];
															echo '<option value="'.$id.'">'.$id.'</option>';
														  }
													?>
											</select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_2">Date</label>
                                            <input type="date" min="2015-09-15" class="form-control" id="date" name="date" required>
                                        </div>
                                    </div>
                                </div>
								<div class="text-center">
									<input id="in" type="submit"  value="Submit" class="btn btn-small btn-template-main" />
								</div>
					  </form>
					  <?php					  
					  if(isset($_GET['company']) && !empty($_GET['company']))
   						 {
							  $ticker=$_GET['company'];
							  $sDate=$_GET['date'];
							  $date=date($sDate);
							  $eDate = date('Y-m-d', strtotime('-14 days', strtotime($date)));
							  $_SESSION['d']=$sDate;
							  $sDate=$sDate.' 23:59:59';
							  $_SESSION['startPDate']=$sDate;
							  $_SESSION['endPDate']=$eDate;
							  $_SESSION["ticker"]=$ticker;
							  try
							  {
								  calculateRSI();
								  calculateStochasticOscilator();
								  calculateMovingAverage();
								  calculatePMO();
								  calculateMFI();
								  calculateWilliamRange();
								  getActualResult();
							  }
							  catch(Exception $e)
							  {
								echo 'error';
							  }
						 }
						 
						 
						 
	function getActualResult()
	{
		$ticker=$_SESSION["ticker"];
		$date=$_SESSION['d'];
		$query="SELECT amount_change FROM $ticker where date='".$date."'";
		$result = mysql_query($query);
		if(mysql_num_rows($result)) 
		{
			while($row1 = mysql_fetch_array($result))
			{
				$_SESSION['actualPrice']=$row1["amount_change"];
			}
		}
		else
		{
			$_SESSION['actualPrice']='-1000';
		}
	}
						 
		/// functions implementation
						 
	function calculateMFI()
	{
		$ticker1=$_SESSION["ticker"];
		
		$fetchQuery="SELECT * FROM $ticker1 WHERE date BETWEEN '".$_SESSION['endPDate']."' AND '".$_SESSION['startPDate']."' ORDER BY open ASC limit 14"; 
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$tp[$i]= ($row1["close"]+$row1["low"]+$row1["high"])/3; 
			$mf[$i]=$tp[$i]*$row1["volume"];
			//echo $tp[$i].'    '.$mf[$i].'<br>';
			$i++;
		}
		$count=$i;
		$positiveMF=0;
		$negativeMF=0;
		for ($i=0;$i<$count;$i++)
		{	
			if($i==$count-2)
			{
				break;
			}
			else
			{
				if($tp[$i]>$tp[$i+1])
				{
					$positiveMF++;
				}
				else if($tp[$i]<$tp[$i+1])
				{
					$negativeMF++;
				}
			}
		}
		$moneyRatio=$positiveMF/$negativeMF;
		$mfi=(100-(100/(1+$moneyRatio)));
		if($mfi >= 50)
		{
		//	echo  'MFI.......increase,,,please sell'.'<br>';
		$mfiChange="increase";
		$mfiIndication="sell";
		}
		else
		{
		//	echo  'MFI.......decrease,,,please buy'.'<br>';
		$mfiChange="decrease";
		$mfiIndication="buy";
		}
		$_SESSION['mfiChan']=$mfiChange;
		$_SESSION['mfiIndi']=$mfiIndication;
    }
	
	function calculateRSI()
	{
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT * FROM $ticker1 WHERE date BETWEEN '".$_SESSION['endPDate']."' AND '".$_SESSION['startPDate']."' ORDER BY open ASC limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close[$i]= $row1["close"]; 
			$date[$i]= $row1["date"]; 
			$i++;
		}
		$count=$i;
		$upclose=0;
		$downclose=0;
		for ($i=0;$i<$count;$i++)
		{	
			if($i==$count-2)
			{
				break;
			}
			else
			{
				if($close[$i]>$close[$i+1])
				{	
					$upclose+=$close[$i];
				}
				else
				{
					$downclose+=$close[$i];
					
				}
			}
		}
		$temp1=($upclose/$downclose)+1;
		$temp2=100/$temp1;
		$RSI=100-$temp2;
		
		if($RSI>50)
		{
			//echo  'RSI.......increase,,,please sell'.'<br>';
			$rsiChange="increase";
			$rsiIndication="sell";
		
		}
		else
		{
			//echo 'RSI.........decrease,,,please buy'.'<br>';
			$rsiChange="decrease";
			$rsiIndication="buy";
		
		}
		$_SESSION['rsiChan']=$rsiChange;
		$_SESSION['rsiIndi']=$rsiIndication;
	}
	
	function calculateMovingAverage()
	{
		$tma=0;
		$yma=0;
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT * FROM $ticker1 WHERE date BETWEEN '".$_SESSION['endPDate']."' AND '".$_SESSION['startPDate']."' ORDER BY open ASC limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close[$i]= $row1["close"]; 
			$i++;
		}
		$count=$i;
		for ($i=0;$i<$count;$i++)
		{	
			if($i==$count-2)
			{
				break;
			}
			else
			{
				$tma+=$close[$i];

				if($i==0)
				{	
					continue;
				}
				else
				{
					$yma+=$close[$i];
				}
			}
		}
		$tma=$tma/14;
		$yma=$yma/13;
		if($tma>$yma)
		{
			//echo  'Moving Average........increase,,,please sell'.'<br>';
			$maChange="increase";
			$maIndication="sell";
		
		}
		else if($tma<$yma)
		{
			//echo  'Moving Average........decrease,,,please buy'.'<br>';
			$maChange="decrease";
			$maIndication="buy";
		}
		$_SESSION['maChan']=$maChange;
		$_SESSION['maIndi']=$maIndication;
	}
	
	function calculateStochasticOscilator()
	{
		$tc=currentClose();
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT * FROM $ticker1 WHERE date BETWEEN '".$_SESSION['endPDate']."' AND '".$_SESSION['startPDate']."' ORDER BY open ASC limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$high[$i]= $row1["high"]; 
			$low[$i]= $row1["low"]; 
			$i++;
		}
		$count=$i;
		$highest=$high[0];
		$lowest=$low[0];
		for ($i=0;$i<$count;$i++)
		{	
			if($i==$count-2)
			{
				break;
			}
			else
			{
				if($highest<$high[$i])
				{
					$highest=$high[$i];
				}
				if($lowest>$low[$i])
				{
					$lowest=$low[$i];
				}
			}
		}
		$hn=$highest;
		$ln=$lowest;
		$k=(($tc-$ln)/($hn-$ln));
		$percentageK=$k*100;
		if($percentageK>=50)
		{
			//echo 'Stochastic Oscilator......increase,,,please sell'.'<br>';
			$stocChChange="increase";
			$stocChIndication="sell";
		
		}
		else if($percentageK<50)
		{
			//echo 'Stochastic Oscilator......decrease,,,please buy'.'<br>';
			$stocChChange="decrease";
			$stocChIndication="buy";
		}
		else
		{
			//echo 'Stochastic Oscilator....neutral,,,i am not sure'.'<br>';
			$stocChChange="neutral";
			$stocChIndication="upheld";
		}
		$_SESSION['stocChChan']=$stocChChange;
		$_SESSION['stocChIndi']=$stocChIndication;
	}
	
	function calculateWilliamRange()
	{
		$tc=currentClose();
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT * FROM $ticker1 WHERE date BETWEEN '".$_SESSION['endPDate']."' AND '".$_SESSION['startPDate']."' ORDER BY open ASC limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$high[$i]= $row1["high"]; 
			$low[$i]= $row1["low"]; 
			$i++;
		}
		$count=$i;
		$highest=$high[0];
		$lowest=$low[0];
		for ($i=0;$i<$count;$i++)
		{	
			if($i==$count-2)
			{
				break;
			}
			else
			{
				if($highest<$high[$i])
				{
					$highest=$high[$i];
				}
				if($lowest>$low[$i])
				{
					$lowest=$low[$i];
				}
			}
		}
		$percentageRatio=((($highest-$tc)/($highest-$lowest))*100);
		if($percentageRatio>=50)
		{
			//echo 'William Percentage Ratio......increase,,,please sell'.'<br>';
			$wrChange="increase";
			$wrIndication="sell";
		}
		else
		{
			//echo 'William Percentage Ratio......decrease,,,please buy'.'<br>';
			$wrChange="decrease";
			$wrIndication="buy";
		}
		
		$_SESSION['wrChan']=$wrChange;
		$_SESSION['wrIndi']=$wrIndication;
	}
	
	function calculatePMO()
	{
		$tc=currentClose();
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT * FROM $ticker1 WHERE date BETWEEN '".$_SESSION['endPDate']."' AND '".$_SESSION['startPDate']."' ORDER BY open ASC limit 14";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$ndac= $row1["close"]; 
		}
		$pmo=$tc-$ndac;
		if($pmo>0)
		{
			//echo 'PMO......increase,,,please sell'.'<br>';
			$pmoChange="increase";
			$pmoIndication="sell";
		}
		else if($pmo<0)
		{
			//echo 'PMO......decrease,,,please buy'.'<br>';
			$pmoChange="decrease";
			$pmoIndication="buy";
		}
		else
		{
			//echo 'PMO......neutral,,,well i am not sure'.'<br>';
			$pmoChange="neutral";
			$pmoIndication="upheld";
		}
		
		$_SESSION['pmoChan']=$pmoChange;
		$_SESSION['pmoIndi']=$pmoIndication;
	}
	
	function currentDate()
	{
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT max(date) from $ticker1";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$date= $row1["max(date)"]; 
		}
		return $date;
	}
	function currentClose()
	{
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT close from $ticker1 where date='".currentDate()."'";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close= $row1["close"]; 
		}
		return $close;
	}
	function previousDate()
	{
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT date FROM $ticker1 ORDER BY date DESC LIMIT 1, 1";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$date= $row1["date"]; 
		}
		return $date;
	}
	function previousClose()
	{
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT close from $ticker1 where date='".previousDate()."'";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close= $row1["close"]; 
		}
		return $close;
	}
   ?>
	


<?php
			if(isset($_GET['company']) && !empty($_GET['company']))
			{
				$buyCount=0;
				$sellCount=0;
				$indication='';
				$suggestionsArray = array($_SESSION['rsiIndi'], $_SESSION['stocChIndi'],$_SESSION['maIndi'],$_SESSION['pmoIndi'],$_SESSION['mfiIndi']);
				$loop=sizeof($suggestionsArray);
				for($i=0;$i<$loop;$i++) 
				{
					if($suggestionsArray[$i]=='buy')
					{
						$buyCount++;
					}
					else if($suggestionsArray[$i]=='sell')
					{
						$sellCount++;
					}
				}
				if($buyCount>$sellCount)
				{
					$indication='buy';
				}
				else if($buyCount<$sellCount)
				{
					$indication='sell';
				}
				else
				{
					$indication='upheld';
				}
				$_SESSION['overallIndication']=$indication;
			?>
    		<?php
			//echo "<tr><td> William Percentage Ratio</td><td>" .$_SESSION['wrChan']. "</td><td> ".$_SESSION['wrIndi']. "</td>  </tr>";
			$signal=$_SESSION['overallIndication'];
			if($signal=='buy')
				$_SESSION['final']='BUY';
			else if($signal=='sell')
				$_SESSION['final']='SELL';
			else
				$_SESSION['final']='UPHELD';
			
			
			}
			?>
					<?php
						if(isset($_GET['company']) && !empty($_GET['company']))
						{
							
							function saveRecord()
							{
								include ("includes/connect.php");
								$ticker=$_SESSION["ticker"];
								$mfi=$_SESSION['mfiChan'];
								$rsi=$_SESSION['rsiChan'];
								$ma=$_SESSION['maChan'];
								$sto=$_SESSION['stocChChan'];
								$william=$_SESSION['wrChan'];
								$pmo=$_SESSION['pmoChan'];
								$prediction=$_SESSION['final'];
								$actual=$_SESSION['actualPrice'];
								$date=$_SESSION['d'];
								
								if($date>'2016-05-27')
								{
									$date='2016-05-27';
								}
								if($actual!='-1000')
								{
									if($prediction=='BUY' && $actual<0 || $prediction=='SELL' && $actual>0)
									{
										$result='1';
									}
									
									else
									{
										$result='0';
									}
								}
								else
								{
									$result='-1';
								}
								$query = "INSERT INTO results  VALUES ('','$ticker','$date','$mfi','$rsi','$ma','$william','$sto','$pmo','$prediction','$actual','$result')";
								$data = mysql_query ($query)or die(mysql_error());
							}	
							saveRecord();
						 
	
						
						
						
						
					?>
						<br>
						<div class="alert alert-success" role="alert">Overall Prediction for <strong><?php echo "'".$ticker; ?></strong>' Shares is <strong><?php echo "'".$_SESSION['final']."'.";?></strong></div>
                       
						<?php
						}
					?>						
							
							<br>
							<h4>View Details about Prediction!!</h4>	
						
                            <div class="panel-group" id="accordion">

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq1">

						    1. RSI?

						</a>

					    </h4>
                                    </div>
                                    <div id="faq1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>"Relative Strength Index" Indicator</p>
											<ul>
												<li>Prediction is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['rsiChan'];?></li>
												<li>Indication is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['rsiIndi'];?> </li>
											</ul>
                                            
                                        </div>
                                    </div>
                                </div>
								
								
								 
								
								
                                <!-- /.panel -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

						    2. Stochastic Oscilator?

						</a>

					    </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                       
										<p>"Stochastic Oscilator" Indicator</p>
											<ul>
												<li>Prediction is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['stocChChan'];?></li>
												<li>Indication is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['stocChIndi'];?> </li>
											</ul>									   
										</div>
                                    </div>
                                </div>
                                <!-- /.panel -->


                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

						    3. Moving Average?

						</a>

					    </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
											<p>"Moving Average" Indicator</p>
											<ul>
												<li>Prediction is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['maChan'];?></li>
												<li>Indication is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['maIndi'];?> </li>
											</ul>
										</div>
                                    </div>
                                </div>
                                <!-- /.panel -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#faq4">

						    4. Price Momentum Oscilator?

						</a>

					    </h4>
                                    </div>
                                    <div id="faq4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>"Price Momentum Oscilator" Indicator</p>
											<ul>
												<li>Prediction is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['pmoChan'];
												?></li>
												<li>Indication is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['pmoIndi'];?> </li>
											</ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#faq5">

						    5. MFI?

						</a>

					    </h4>
                                    </div>
                                    <div id="faq5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <p>"Money Flow Index" Indicator</p>
											<ul>
												<li>Prediction is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['mfiChan'];?></li>
												<li>Indication is <?php if(isset($_GET['company']) && !empty($_GET['company'])) echo $_SESSION['mfiIndi'];?> </li>
											</ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->

                            </div>
							
							
                            <!-- /.panel-group -->

                            <p class="text-muted">In case you haven't found the answer for your question please feel free to <a href="contact.html">contact us</a>, our customer support will be happy to help you.</p>
                        </section>

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
				_________________________________________________________ -->

                    <div class="col-sm-3">
                        <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Other Services</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="getQuotes.php">Get Real Time Quotes</a>
                                    </li>
                                    <li>
                                        <a href="getHistoricData.php">Get Historic Data</a>
                                    </li>
                                    <li>
                                        <a href="getGraph.php">View Graphical Representation</a>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <!-- *** PAGES MENU END *** -->


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
                        <!-- /.banner -->
                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

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