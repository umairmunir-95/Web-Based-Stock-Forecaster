<?php
include ("includes/connect.php");
session_start();	
$ticker=$_SESSION['tiker'];	
$buyerName=$_GET['id'];
$buyerPrice=$_SESSION['buyerPrice'];
$buyerVolume=$_SESSION['buyervolume'];
$type='buy';
$isComplete=true;
$result = mysql_query("UPDATE bids SET buyerName='$buyerName',buyerPrice='$buyerPrice',isComplete='$isComplete' WHERE ticker='".$_SESSION['tiker']."'");
$query = "INSERT INTO portfolio  VALUES ('','$ticker','$buyerVolume','$buyerPrice','$type','$buyerName')";
echo $query;
$data = mysql_query ($query)or die(mysql_error());
if($data)
{
	header("Location: bidsDetails.php");
}
?>