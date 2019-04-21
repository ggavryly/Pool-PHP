#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $str = array_filter(explode(' ', $str));
        sort($str);
        return ($str);
    }
    unset($argv[0]);
    $stv = implode(' ',$argv);
    $stv = ft_split($stv);
    foreach ($stv as $value)
    {
        echo $value;
        echo "\n";
    }
?>