<?php
	session_start();
	if(isset($_SESSION['userName']))
	{
		header('location:/project/userPortfolio.php');
		//echo 'Welcome '.$_SESSION['userName'].'<br>';
		//echo '<a href="logout.php">Logout</a>';
	}
	else
	{
		header('location:/project/loginRegister.php');
	}
?>


