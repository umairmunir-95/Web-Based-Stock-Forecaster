<?php
include ("includes/connect.php");
session_start();		
$ticker = $_GET['id'];
$result = mysql_query("DELETE FROM bids WHERE ticker='".$ticker."'");
$result2 = mysql_query("DELETE FROM bidsDetails WHERE ticker='".$ticker."'");
header("Location:bidsDetails.php");




?>