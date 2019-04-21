#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$str = array_filter(explode(' ', $str));
		sort($str);
		return ($str);
	}
?>