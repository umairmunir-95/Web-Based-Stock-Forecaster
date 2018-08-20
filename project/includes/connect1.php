<?php
$conn = mysql_connect("localhost","root","") or die("cannot connected");
@mysql_select_db("yahoofinance",$conn);
?>