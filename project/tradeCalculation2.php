<?php
include_once("includes/connect.php");
session_start();

$fetchQuery3="SELECT max(id) FROM tradingpolicies where isComplete=0 && userName='".$_SESSION['userName']."'";
$result3 = mysql_query($fetchQuery3);
$i=0;
while($row3 = mysql_fetch_array($result3))
{
	$maxID=$row3["max(id)"];
	$_SESSION['maxID']=$maxID;
	$i++;
}
if($_SESSION['maxID']==NULL)
{
	$_SESSION['maxID']=1000;
}
$fetchQuery4="SELECT remainingTime FROM tradingpolicies where isComplete='0' && userName='".$_SESSION['userName']."' && id=".$_SESSION['maxID'];
$result4 = mysql_query($fetchQuery4);
while($row4 = mysql_fetch_array($result4))
{
	$remainingTime=$row4["remainingTime"];
	$_SESSION['remain']=$remainingTime;
	$i++;
}
if($_SESSION['remain']==0)
{
	$totalEarning=0;
	$isComplete=true;
	$result = mysql_query("UPDATE tradingpolicies SET isComplete='$isComplete',profitLoss=$totalEarning WHERE id='".$_SESSION['maxID']."' && userName='".$_SESSION['userName']."'");
	sleep(5);
	header('location:/project/tradeResults.php');
}
else
{
	header('location:/project/tradeResults.php');
}
?>
