<?php 
	include_once("includes/connect1.php");
	session_start();
		
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
                        <h1>Trade Results</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a>
                            </li>
							<li><a href="tradeResults.php">Results</a>
                            </li>
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
					    $ticker=$_SESSION['compTicker'];
						//  session_start();
	 					  $_SESSION["ticker"]=$ticker;
	 					  calculateRSI();
	 					  calculateStochasticOscilator();
	 					  calculateMovingAverage();
	 					  calculatePMO();
	 					  calculateMFI();
	 					 
						 
						 /// functions implementation
						 
	function calculateMFI()
	{
		$num1=rand(1,7)*0.8;
		$_SESSION['value1']=$num1;
		$num2=rand(1,7)*0.8;
		$_SESSION['value2']=$num2;
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT high,low,close,volume from $ticker1 limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$tp[$i]= ($row1["close"]+$row1["low"]+$row1["high"])/3; 
			$mf[$i]=$tp[$i]*$row1["volume"];
			//echo $tp[$i].'    '.$mf[$i].'<br>';
			$i++;
		}
		$positiveMF=0;
		$negativeMF=0;
		for ($i=0;$i<15;$i++)
		{	
			if($i==13)
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
		$num3=rand(1,7)*0.8;
		$_SESSION['value3']=$num3;
		$num4=rand(1,7)*0.8;
		$_SESSION['value4']=$num4;
		
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT close,date from $ticker1 limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close[$i]= $row1["close"]; 
			$date[$i]= $row1["date"]; 
			$i++;
		}
		$upclose=0;
		$downclose=0;
		for ($i=0;$i<15;$i++)
		{	
			if($i==13)
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
		$num5=rand(1,7)*0.8;
		$_SESSION['value5']=$num5;
		$num6=rand(1,7)*0.8;
		$_SESSION['value6']=$num6;
		
		$tma=0;
		$yma=0;
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT close from $ticker1 limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close[$i]= $row1["close"]; 
			$i++;
		}
		for ($i=0;$i<15;$i++)
		{	
			if($i==13)
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
		$num7=rand(1,7)*0.8;
		$_SESSION['value7']=$num7;
		$num8=rand(1,7)*0.8;
		$_SESSION['value8']=$num8;
		
		$tc=currentClose();
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT high,low from $ticker1 limit 14";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$high[$i]= $row1["high"]; 
			$low[$i]= $row1["low"]; 
			$i++;
		}
		$highest=$high[0];
		$lowest=$low[0];
		for ($i=0;$i<15;$i++)
		{	
			if($i==13)
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
	
	function calculatePMO()
	{
		$num9=rand(1,7)*0.8;
		$_SESSION['value9']=$num9;
		$num10=rand(1,7)*0.8;
		$_SESSION['value10']=$num10;
		$tc=currentClose();
		$ticker1=$_SESSION["ticker"];
		$fetchQuery="SELECT close FROM $ticker1 ORDER BY date DESC LIMIT 14, 1";
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
	function rsiResults()
	{
		if($_SESSION['rsiChan']=='increase')
		{
			$unitPriceProfit=((($_SESSION['value1']/100)*$_SESSION['unitPrice'])+($_SESSION['unitPrice']));
			$totalEarning=$unitPriceProfit*$_SESSION['shares'];
			$_SESSION['rsiEarn']=$totalEarning;
		}
		else if($_SESSION['rsiChan']=='decrease')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])-(($_SESSION['value2']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['rsiEarn']=$totalEarning;
		}
		else if($_SESSION['rsiChan']=='neutral')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])+(($_SESSION['value2']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['rsiEarn']=$totalEarning;
		}
		if($_SESSION['amount'] > $_SESSION['rsiEarn'])
		{
			$loss=$_SESSION['amount']-$_SESSION['rsiEarn'];
			$profit=0;
		}
		else if ($_SESSION['amount'] < $_SESSION['rsiEarn'])
		{
			$loss=0;
			$profit=$_SESSION['rsiEarn']-$_SESSION['amount'];
		}
		echo 'Total Investment : '.$_SESSION['amount'].' Rs/-'.'<br>';
		echo 'Expected Earning : '.number_format(($_SESSION['rsiEarn']),2).' Rs/-'.'<br>';
		echo 'Profit : '.number_format(($profit),2).' Rs/-'.'<br>';
		echo 'Loss : '.number_format(($loss),2).' Rs/-'.'<br>';
	}
	
	function pmoResults()
	{
		if($_SESSION['pmoChan']=='increase')
		{
			$unitPriceProfit=((($_SESSION['value9']/100)*$_SESSION['unitPrice'])+($_SESSION['unitPrice']));
			$totalEarning=$unitPriceProfit*$_SESSION['shares'];
			$_SESSION['pmoEarn']=$totalEarning;
		}
		else if($_SESSION['pmoChan']=='decrease')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])-(($_SESSION['value10']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['pmoEarn']=$totalEarning;
		}
		else if($_SESSION['pmoChan']=='neutral')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])+(($_SESSION['value10']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['pmoEarn']=$totalEarning;
		}
		if($_SESSION['amount'] > $_SESSION['pmoEarn'])
		{
			$loss=$_SESSION['amount']-$_SESSION['pmoEarn'];
			$profit=0;
		}
		else if ($_SESSION['amount'] < $_SESSION['pmoEarn'])
		{
			$loss=0;
			$profit=$_SESSION['pmoEarn']-$_SESSION['amount'];
		}
		
		echo 'Total Investment : '.$_SESSION['amount'].' Rs/-'.'<br>';
		echo 'Expected Earning : '.number_format(($_SESSION['pmoEarn']),2).' Rs/-'.'<br>';
		echo 'Profit : '.number_format(($profit),2).' Rs/-'.'<br>';
		echo 'Loss : '.number_format(($loss),2).' Rs/-'.'<br>';
	}
	
	
	
	function stocChResults()
	{
		if($_SESSION['stocChChan']=='increase')
		{
			$unitPriceProfit=((($_SESSION['value7']/100)*$_SESSION['unitPrice'])+($_SESSION['unitPrice']));
			$totalEarning=$unitPriceProfit*$_SESSION['shares'];
			$_SESSION['stoEarn']=$totalEarning;
		}
		else if($_SESSION['stocChChan']=='decrease')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])-(($_SESSION['value8']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['stoEarn']=$totalEarning;
		}
		else if($_SESSION['stocChChan']=='neutral')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])+(($_SESSION['value8']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['stoEarn']=$totalEarning;
		}
		if($_SESSION['amount'] > $_SESSION['stoEarn'])
		{
			$loss=$_SESSION['amount']-$_SESSION['stoEarn'];
			$profit=0;
		}
		else if ($_SESSION['amount'] < $_SESSION['stoEarn'])
		{
			$loss=0;
			$profit=$_SESSION['stoEarn']-$_SESSION['amount'];
		}
		echo 'Total Investment : '.$_SESSION['amount'].' Rs/-'.'<br>';
		echo 'Expected Earning : '.number_format(($_SESSION['stoEarn']),2).' Rs/-'.'<br>';
		echo 'Profit : '.number_format(($profit),2).' Rs/-'.'<br>';
		echo 'Loss : '.number_format(($loss),2).' Rs/-'.'<br>';
	}

	function mfiResults()
	{
		if($_SESSION['mfiChan']=='increase')
		{
			$unitPriceProfit=((($_SESSION['value3']/100)*$_SESSION['unitPrice'])+($_SESSION['unitPrice']));
			$totalEarning=$unitPriceProfit*$_SESSION['shares'];
			$_SESSION['mfiEarn']=$totalEarning;
		}
		else if($_SESSION['mfiChan']=='decrease')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])-(($_SESSION['value4']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['mfiEarn']=$totalEarning;
		}
		else if($_SESSION['mfiChan']=='neutral')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])+(($_SESSION['value4']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['mfiEarn']=$totalEarning;
		}
		if($_SESSION['amount'] > $_SESSION['mfiEarn'])
		{
			$loss=$_SESSION['amount']-$_SESSION['mfiEarn'];
			$profit=0;
		}
		else if ($_SESSION['amount'] < $_SESSION['mfiEarn'])
		{
			$loss=0;
			$profit=$_SESSION['mfiEarn']-$_SESSION['amount'];
		}
		echo 'Total Investment : '.$_SESSION['amount'].' Rs/-'.'<br>';
		echo 'Expected Earning : '.number_format(($_SESSION['mfiEarn']),2).' Rs/-'.'<br>';
		echo 'Profit : '.number_format(($profit),2).' Rs/-'.'<br>';
		echo 'Loss : '.number_format(($loss),2).' Rs/-'.'<br>';
	}
	
	function maResults()
	{
		if($_SESSION['maChan']=='increase')
		{
			$unitPriceProfit=((($_SESSION['value5']/100)*$_SESSION['unitPrice'])+($_SESSION['unitPrice']));
			$totalEarning=$unitPriceProfit*$_SESSION['shares'];
			$_SESSION['maEarn']=$totalEarning;
		}
		else if($_SESSION['maChan']=='decrease')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])-(($_SESSION['value6']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['maEarn']=$totalEarning;
		}
		else if($_SESSION['maChan']=='neutral')
		{
			$unitPriceLoss=(($_SESSION['unitPrice'])+(($_SESSION['value6']/100)*$_SESSION['unitPrice']));
			$totalEarning=$unitPriceLoss*$_SESSION['shares'];
			$_SESSION['maEarn']=$totalEarning;
		}
		if($_SESSION['amount'] > $_SESSION['maEarn'])
		{
			$loss=$_SESSION['amount']-$_SESSION['maEarn'];
			$profit=0;
		}
		else if ($_SESSION['amount'] < $_SESSION['maEarn'])
		{
			$loss=0;
			$profit=$_SESSION['maEarn']-$_SESSION['amount'];
		}
		echo 'Total Investment : '.$_SESSION['amount'].' Rs/-'.'<br>';
		echo 'Expected Earning : '.number_format(($_SESSION['maEarn']),2).' Rs/-'.'<br>';
		echo 'Profit : '.number_format(($profit),2).' Rs/-'.'<br>';
		echo 'Loss : '.number_format(($loss),2).' Rs/-'.'<br>';
	}
   ?>
	


						
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
                                            <p>"Relative Strength Index" Indicator!!</p>
											<ul>
											<?php  rsiResults();?>
											</ul>
                                            
                                        </div>
                                    </div>
                                </div>
								
								
								 
								
								
                                <!-- /.panel -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

						    2. Stochastic Oscilator? <title="aaaaa">

						</a>

					    </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                       
										<p>"Stochastic Oscilator" Indicator</p>
											<ul>
											<?php stocChResults();?>
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
											<p>"Moving Average" Indicator!!</p>
											<ul>
											
											<?php maResults();?>
											
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
											<?php pmoResults();?>
											
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
                                           <p>"Money Flow Index" Indicator!!</p>
											<ul>
											
											<?php mfiResults();?>
											
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
                                <h3 class="panel-title">Customer section</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active">
                                        <a href="tradeResults.php"><i class="fa fa-heart"></i>Trade Results</a>
                                    </li>
                                    <li>
                                        <a href="autoTrade.php"><i class="fa fa-heart"></i>Autonomic Trading</a>
                                    </li>
                                    <li>
                                        <a href="userPortfolio.php"><i class="fa fa fa-comments"></i> My Portfolio</a>
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