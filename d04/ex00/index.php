<?php
	session_start();
	if ($_GET["login"] && $_GET["passwd"] && $_GET["submit"] && $_GET["submit"] === "OK")
    {
		$_SESSION["login"] = $_GET["login"];
		$_SESSION["passwd"] = $_GET["passwd"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Makaroni</title>
	<style>
	.foree
	{
		position: absolute;
		top: 40%;
		left: 40%;
	}
	</style>
</head>
<body>
	<form class="foree" action="index.php" method="GET">
		Username: <input type="text" name="login" value ="<?=$_SESSION["login"]?>">
		<br>
		Password: <input type="password" name="passwd" value="<?=$_SESSION["passwd"]?>">
		<br>
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>