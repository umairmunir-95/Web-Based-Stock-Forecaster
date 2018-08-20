<?php
include('includes/lib/phpgraphlib.php');
include_once("includes/connect.php");
include('includes/lib/phpgraphlib_pie.php');

$result = mysql_query("select count(id) from results where result='0'");
$i=0;
while($row1 = mysql_fetch_array($result)) 
{
	$failure=$row1["count(id)"];
	$i++;
}	
$result = mysql_query("select count(id) from results where result='1'");
$i=0;
while($row1 = mysql_fetch_array($result)) 
{
	$success=$row1["count(id)"];
	$i++;
}	
$total=$success+$failure;

$successRate=($success/$total)*100;
$failureRate=($failure/$total)*100;

$graph = new PHPGraphLibPie(600, 400);
$data = array("Success" => $successRate, "Failure" => $failureRate);
$graph->addData($data);
$graph->setTitle('Prediction Results');
$graph->setLabelTextColor('50,50,50');
$graph->setLegendTextColor('50,50,50');
$graph->createGraph();
//header("Location:getResults.php");
?>