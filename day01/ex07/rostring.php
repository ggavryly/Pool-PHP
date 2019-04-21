#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $str = array_filter(explode(' ', $str));
        return ($str);
    }
    unset($argv[0]);
    $str = ft_split($argv[1]);
    $first = array_shift($str);
    array_push($str, $first);
    $res = implode(' ', $str);
    print_r($res);
    if ($argc > 1)
        echo "\n";
?>