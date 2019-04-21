<?php
	function auth($login, $passwd)
	{
		if (!$login || !$passwd)
			return (0);
		$accounts = unserialize(file_get_contents("../private/passwd"));
		if ($accounts)
		{
			foreach ($accounts as $key => $value)
			{
				$test = hash("md5", $passwd);
				if ($value['login'] === $login && $value['passwd'] === $test)
					return (1);
			}
		}
	}
?>