<?php
include('includes/lib/phpgraphlib.php');
include('includes/connect.php');
generateGraph();
function generateGraph()
	{
		session_start();
		//$ticker1=$_SESSION["ticker"];
		$ticker=$_GET["company"];
		$graph=new PHPGraphLib(1200,500); 
		$dataArray=array();
		$sql="SELECT prevPrice, changedPrice AS 'count' FROM marketsummary where ticker='".$ticker."' GROUP BY prevPrice";
		$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
		if ($result) 
		{
		  while ($row = mysql_fetch_assoc($result))
		  {
			  $salesgroup=number_format(($row["prevPrice"]), 2) ;
      $count=number_format(($row["count"]),2);
      $dataArray[$count]=$salesgroup;
		  }
		}
		$graph->addData($dataArray);
		//$graph->setTitle($ticker.' graph');
		$graph->setTitle('Price vs Changed Price Graph');
		
		$graph->setBars(true);
		$graph->setLine(true);
		$graph->setDataPoints(true);
		$graph->setDataPointColor('maroon');
		$graph->setDataValues(true);
		$graph->setDataValueColor('maroon');
		$graph->setGoalLine(.0025);
		$graph->setGoalLineColor('red');
		$graph->createGraph();
	}
?>