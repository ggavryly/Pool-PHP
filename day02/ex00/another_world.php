#!/usr/bin/php
<?php
	if ($argc < 2)
		exit(0);
	else
	{
		echo trim(preg_replace("/\s+/", " ", $argv[1]))."\n";		
	}
?>