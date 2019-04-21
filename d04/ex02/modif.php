<pre>
<?php
	if ($_POST["login"] && $_POST["old-passwd"] && $_POST["new-passwd"] && $_POST["submit"] && $_POST["submit"] === "OK")
	{
		if (!file_exists("../private/passwd"))
		{
			echo "ERROR";
			exit (0);
		}
		$accounts = unserialize(file_get_contents("../private/passwd"));
		$exist = 0;
		foreach ($accounts as $key => $e)
		{
			if ($_POST['login'] === $e['login'])
			{
				$test = hash("md5", $_POST['old-passwd']);
				if ($e['passwd'] === $test)
				{
					$exist = 1;
					$accounts[$key]['passwd'] = hash("md5" ,$_POST['new-passwd']);
					file_put_contents("../private/passwd", serialize($accounts));
					echo "OK\n";
				}
			}
		}
		if ($exist === 0)
		{
			echo "ERROR";
		}
	}
?>