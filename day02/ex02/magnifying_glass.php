#!/usr/bin/php
<?php
	if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$fd = fopen($argv[1], "r");
	if ($fd == false)
		exit();
	$array = file_get_contents($argv[1]);
	preg_match_all("/<\s*a.*\".*\".*<\/a>/", $array, $kek);
	for ($i = 0; $i < count($kek[0]); $i++)
	{
		preg_match_all("/title.*\".*\"/", $kek[0][$i], $kek1);
		preg_match_all("/>[^<]*</", $kek[0][$i], $kek11);
		for ($j = 0; $j < count($kek1[0]); $j++)
		{
			preg_match_all("/\".*\"/", $kek1[0][$j], $kek2);
			for ($k = 0; $k < count($kek2[0]); $k++)
			{
				$array = str_replace($kek2[0][0], strtoupper($kek2[0][0]), $array);
			}
		}
		for ($m = 0; $m < count($kek11[0][$m]); $m++)
		{
			$array = str_replace($kek11[0][$m], strtoupper($kek11[0][$m]), $array);
		}

	}
	echo "$array\n";
?>