<?php
include('includes/lib/phpgraphlib.php');
include('includes/connect.php');
generateGraph();
function generateGraph()
	{
		session_start();
		$graph=new PHPGraphLib(1200,700); 
		$dataArray=array();
		$sql="SELECT indexValue,marketCapitalization FROM marketwatch";
		$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
		if ($result) 
		{
		  while ($row = mysql_fetch_assoc($result))
		  {
			  $indexValue=$row["indexValue"];
			  $marketCapitalization=number_format(($row["marketCapitalization"]),2);
			  $dataArray[$marketCapitalization]=$indexValue;
		  }
		}
		$graph->addData($dataArray);
		$graph->setTitle('Net Worth versus Market Index Graph');
		$graph->setBars(false);
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