#!/usr/bin/php
<?php
	if ($argc != 2)
		exit();
	$str_words = preg_replace("/\s+/", " ", $argv[1]);
	$str_words = trim($str_words);
	echo ("$str_words\n");
?>