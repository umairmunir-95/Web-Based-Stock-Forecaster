<?php
include_once("includes/connect1.php");
session_start();
function calculateMFI()
	{
		try
		{
				$ticker1=$_SESSION["compTicker"];
				$fetchQuery="SELECT high,low,close,volume from $ticker1 limit 30";
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
				for ($i=0;$i<31;$i++)
				{	
					if($i==29)
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
		catch(Exception $e)
		{
			$day=nextDate();
			$nextDayData();
		}
    }
	
	function calculateRSI()
	{
		$ticker1=$_SESSION['compTicker'];
		echo $ticker1;
		$fetchQuery="SELECT close,date from $ticker1 limit 28";
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
		for ($i=0;$i<30;$i++)
		{	
			if($i==26)
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
		$ticker1=$_SESSION["compTicker"];
		$fetchQuery="SELECT close from $ticker1 limit 30";
		$result1 = mysql_query($fetchQuery);
		$i=0;
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close[$i]= $row1["close"]; 
			$i++;
		}
		for ($i=0;$i<31;$i++)
		{	
			if($i==29)
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
		$tma=$tma/30;
		$yma=$yma/29;
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
		$ticker1=$_SESSION["compTicker"];
		$fetchQuery="SELECT high,low from $ticker1 limit 30";
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
		for ($i=0;$i<31;$i++)
		{	
			if($i==29)
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
		$ticker1=$_SESSION["compTicker"];
		$fetchQuery="SELECT high,low from $ticker1 limit 30";
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
		for ($i=0;$i<31;$i++)
		{	
			if($i==29)
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
		$ticker1=$_SESSION["compTicker"];
		$fetchQuery="SELECT close FROM $ticker1 ORDER BY date DESC LIMIT 30, 1";
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
		$ticker1=$_SESSION["compTicker"];
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
		$ticker1=$_SESSION["compTicker"];
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
		$ticker1=$_SESSION["compTicker"];
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
		$ticker1=$_SESSION["compTicker"];
		$fetchQuery="SELECT close from $ticker1 where date='".previousDate()."'";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close= $row1["close"]; 
		}
		return $close;
	}
	
	function nextDate()
	{
		$ticker1=$_SESSION["compTicker"];
		$fetchQuery="SELECT date FROM $ticker1 ORDER BY date DESC LIMIT 1, 1";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$date= $row1["date"]; 
		}
		$date=nextDate();
		return $date;
	}
	
	function nextDayData()
	{
	
		$ticker1=$_SESSION["compTicker"];
		$fetchQuery="SELECT close,open,min,max from $ticker1 where date='".nextDate()."'";
		$result1 = mysql_query($fetchQuery);
		while($row1 = mysql_fetch_array($result1)) 
		{
			$close= $row1["close"]; 
			
			$open= $row1["open"]; 
			
			$min= $row1["min"]; 
			
			$max= $row1["max"]; 
		}
		return $max;
	}

	function mainCalculation()
	{
			calculateRSI();
			/*if($_SESSION['rsiChan']=='increase')
			{
				$totalEarning=$_SESSION['unitPriceProfit']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
			}
			else if($_SESSION['rsiChan']=='decrease')
			{
				$totalEarning=$_SESSION['unitPriceLoss']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}*/
			calculateMovingAverage();
			/*if($_SESSION['maChan']=='increase')
			{
				$totalEarning=$_SESSION['unitPriceProfit']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}
			else if($_SESSION['maChan']=='decrease')
			{
				$totalEarning=$_SESSION['unitPriceLoss']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}*/
			calculatePMO();
			/*if($_SESSION['pmoChan']=='increase')
			{
				$totalEarning=$_SESSION['unitPriceProfit']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}
			else if($_SESSION['pmoChan']=='decrease')
			{
				$totalEarning=$_SESSION['unitPriceLoss']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}*/
			calculateStochasticOscilator();
			/*if($_SESSION['stocChChan']=='increase')
			{
				$totalEarning=$_SESSION['unitPriceProfit']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}
			else if($_SESSION['stocChChan']=='decrease')
			{
				$totalEarning=$_SESSION['unitPriceLoss']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}*/
			calculateMFI();
			/*if($_SESSION['mfiChan']=='increase')
			{
				$totalEarning=$_SESSION['unitPriceProfit']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}
			else if($_SESSION['mfiChan']=='decrease')
			{
				$totalEarning=$_SESSION['unitPriceLoss']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}*/
			calculateWilliamRange();
			/*if($_SESSION['wrChan']=='increase')
			{
				$totalEarning=$_SESSION['unitPriceProfit']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}
			else if($_SESSION['wrChan']=='decrease')
			{
				$totalEarning=$_SESSION['unitPriceLoss']*$_SESSION['shares'];
				$isComplete=true;
				$_SESSION['totalEarnings']=$totalEarning;
				$_SESSION['query']='1';
				header('location:/project/tradeCalculation2.php');
			}*/
			header('location:/project/tradeCalculation2.php');
	}
	if($_SESSION['reTime']==0)
	{
		mainCalculation();
	}
	else
	{
		echo $_SESSION['reTime'].' days are still remaining.';
	}

?>