#!/usr/bin/php
<?php
	if ($argc < 2)
		exit(0);
	else
		echo (preg_replace("/[\t\r]/", " ", $argv));	
?>