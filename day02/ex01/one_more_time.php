#!/usr/bin/php
<?php
	if ($argc < 2)
		exit(0);
	else
	{
		$obro = trim($argv[1]);
		$months = array(
			1 => "janvier",
			2 => "février",
			3 => "mars",
			4 => "avril",
			5=> "mai",
			6 => "juin",
			7 => "juillet",
			8 => "août",
			9 => "septembre",
			10 => "octobre",
			11 => "novembre",
			12 => "décembre");
    	$wak = array(
    		1 => "lundi",
    		2 => "mardi",
    		3 => "mercredi",
    		4 => "jeudi",
    		5 => "vendredi",
    		6 => "samedi",
    		7 => "dimanche");
    	$data = explode(" " ,$obro);
    	if (count($data) == 5)
    	{
    		$err = 1;
    		if (preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $data[1], $data[1]) === 0
    			|| preg_match("/^[0-9]{4}|/", $data[3], $data[3]) === 0
    			|| preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $data[4], $data[4]) === 0)
    		{
	    		echo ("Wrong Format\n");
	    		exit();
	    	}
	    	$data[0] = strtolower($data[0]);
	    	$data[2] = strtolower($data[2]);
	    	$data[0] = array_search($data[0], $wak);
	    	$data[2] = array_search($data[2], $months);
	    	if ($data[0] == "" || $data[2] == "")
	    	{
	    		echo ("Wrong Format\n");
	    		exit();
	    	}
	    	if ($data[4][1] === '' || $data[4][2] === '' || $data[4][3] === '' || $data[2] === "" || $data[1][0] === '' || $data[3][0] === '')
	    	{
	    		echo "Wrong Format\n";
	    		exit();
	    	}
	    	else
	    	{
	    		$time = mktime($data[4][1], $data[4][2], $data[4][3], $data[2], $data[1][0], $data[3][0]);
	    		echo "$time\n";
	    	}
    	}
    	else
    	{
    		echo "Wrong Format\n";
    		exit();
    	}
	}
?>