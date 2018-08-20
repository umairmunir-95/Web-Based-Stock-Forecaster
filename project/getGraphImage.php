<?php
include('includes/lib/phpgraphlib.php');
include('includes/connect1.php');
//generateGraph();

generateGraph2();

function generateGraph2()
	{
		session_start();
		//$ticker1=$_SESSION["ticker"];
		$ticker=$_GET["company"];
		$graph=new PHPGraphLib(1200,500); 
		$dataArray=array();
		$sql="SELECT date,volume FROM $ticker GROUP BY date limit 30";
		$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
		if ($result) 
		{
		  while ($row = mysql_fetch_assoc($result))
		  {
			  $date=$row["date"];
			  $volume=$row["volume"];
			  $dataArray[$date]=$volume;
		  }
		}
		$graph->addData($dataArray);
		$graph->setBarColor('blue', 'green');
		$graph->setTitle('Date Vs Shares Graph');
		$graph->setupYAxis(12, 'blue');
		$graph->setupXAxis(20);
		$graph->setGrid(false);
		$graph->setLegend(true);
		$graph->setTitleLocation('left');
		$graph->setTitleColor('blue');
		$graph->setLegendOutlineColor('white');
		$graph->setXValuesHorizontal(false);
		$graph->createGraph();
	}




function generateGraph()
	{
		session_start();
		//$ticker1=$_SESSION["ticker"];
		$ticker=$_GET["company"];
		$graph=new PHPGraphLib(1200,500); 
		$dataArray=array();
		$sql="SELECT date,volume FROM $ticker GROUP BY date limit 30";
		$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
		if ($result) 
		{
		  while ($row = mysql_fetch_assoc($result))
		  {
			  $date=$row["date"];
			  $volume=$row["volume"];
			  $dataArray[$date]=$volume;
		  }
		}
		$graph->addData($dataArray);
		$graph->setTitle('Date Vs Shares Graph');
		$graph->setBars(false);
		$graph->setLine(true);
		$graph->setDataPoints(true);
		$graph->setDataPointColor('maroon');
		$graph->setDataValues(true);
		$graph->setDataValueColor('maroon');
		$graph->setGoalLine(.0025);
		$graph->setGoalLineColor('red');
		$graph->setDataPointSize(15);
		
		$graph->createGraph();
	}
?>