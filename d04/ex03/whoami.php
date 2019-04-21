<?php
	session_start();
	if ($_SESSION['log_user'] && $_SESSION['log_user'] !== "")
	{
		echo "{$_SESSION['log_user']}";
	}
	else
		echo "ERROR";
?>