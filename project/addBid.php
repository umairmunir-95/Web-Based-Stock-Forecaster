<?php 
include ("includes/connect.php");
session_start();
$id=$_GET['id'];
$fetchQuery="SELECT ticker FROM bids where id=".$id;
$result1 = mysql_query($fetchQuery);
while($row1 = mysql_fetch_array($result1))
{
	$ticker=$row1["ticker"];
}
$buyingPrice=$_SESSION['bp'];
$volume=$_SESSION['v'];
$buyerName=$_SESSION['userName'];
$bidType='buy';
$query = "INSERT INTO bidsDetails  VALUES ('$id','$ticker','$buyerName','$buyingPrice','$volume','$bidType')";
$data = mysql_query ($query)or die(mysql_error());
if($data)
{
	$_Session['bidSuccess']="Congratulations!! New policy added successfully.";
	header("Location:bidsDetails.php");
}
else
{
	$_Session['bidSuccess']="Error!! Please try again.";
	header("Location:bidsDetails.php");
}

															
?>
