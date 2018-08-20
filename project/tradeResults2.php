<?php 
	include_once("includes/connect.php");
	session_start();
	$id=$_GET['id'];
	$fetchQuery="SELECT * FROM tradingpolicies where userName='".$_SESSION['userName']."' && id=".$id;
	$result1 = mysql_query($fetchQuery);
	$i=0;
	while($row1 = mysql_fetch_array($result1))
	{
		$compTicker=$row1["companyTicker"];
		$name=$row1["name"];
		$amount=$row1["amount"];
		$minProfit=$row1["minProfit"];
		$maxLoss=$row1["maxloss"];
		$shares=$row1["shares"];
		$i++;
	}
	$_SESSION['compTicker']=$compTicker;
	$_SESSION['name']=$name;
	$_SESSION['amount']=$amount;
	$_SESSION['minProfit']=$minProfit;
	$_SESSION['maxLoss']=$maxLoss;
	$_SESSION['shares']=$shares;
	
		$unitPrice=($_SESSION['amount'])/($_SESSION['shares']);
		$_SESSION['unitPrice']=$unitPrice;
		header("Location:tradeResults3.php");
?>
