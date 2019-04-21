#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $str = array_filter(explode(' ', $str));
        return ($str);
    }
    $array = null;
    for ($i = 1; $i < $argc; $i++)
    {
        $tmp = ft_split($argv[$i]);
        $tmp_count = count($tmp);
        for ($j = 0; $j < $tmp_count; $j++)
        {
            $array[] = $tmp[$j];
        }
    }
    $alpha = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    function sorts($a, $b)
    {
        global $alpha;
        for ($i = 0; $i < strlen($a) || $i < strlen($b); $i++)
        {
            $ca = strtolower($a);
            $cb = strtolower($b);
            $pos0 = strpos($alpha, $ca[$i]);
            $pos1 = strpos($alpha, $cb[$i]);
            if ($pos0 < $pos1)
                return (-1);
            else if ($pos0 > $pos1)
                return (1);
            else
                $i++;
        }
    }
    usort($array, "sorts");
    foreach ($array as $value)
    {
        echo $value."\n";
    }
?>