<?php
	include ("auth.php");
	session_start();
	if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
	{
		$_SESSION['log_user'] = $_GET['login'];
		echo "OK\n";
	}
	else
		{
		$_SESSION['log_user'] = "";
		echo "ERROR\n";
	}
?>