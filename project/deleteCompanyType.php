<?php
include("includes/connect.php");
$id = $_GET['id'];
$result = mysql_query("DELETE FROM companytype WHERE ID=$id");
header("Location:adminPortfolio.php");
?>

