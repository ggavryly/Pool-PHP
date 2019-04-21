<?php
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] && $_POST["submit"] === "OK")
{
	if (!file_exists("../private"))
	{
		mkdir("../private");
	}
	if (!file_exists("../private/passwd"))
	{
		file_put_contents("../private/passwd", "");
	}
	$accounts = unserialize(file_get_contents("../private/passwd"));
	$exist = 0;
	foreach ($accounts as $key => $e)
	{
		if ($_POST['login'] === $e['login'])
		{
			$exist = 1;
		}
	}
	if ($exist === 1)
	{
		echo "ERROR\n";
	}
	else
	{
		$new_acc['login'] = $_POST['login'];
		$new_acc['passwd'] = hash("md5", $_POST['passwd']);
		$accounts[] = $new_acc;
		file_put_contents("../private/passwd", serialize($accounts));
		echo "OK\n";
	}
}
?>