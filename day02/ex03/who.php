#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
$fd = fopen("/var/run/utmpx", "r");
while (($str = fread($fd, 628)))
	$tab[] = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/@", $str);
foreach ($tab as $elem)
{
	$elem[time1] += 3600;
	if ($elem['type'] == 7)
		echo $elem['user']." ".$elem['line']."  ".date("M  j H:i", $elem['time1'])."\n";
}
?>