<?php
include("includes/connect.php");
$id = $_GET['id'];
$result = mysql_query("DELETE FROM registration WHERE id=$id");
header("Location:viewUsers.php");
?>

