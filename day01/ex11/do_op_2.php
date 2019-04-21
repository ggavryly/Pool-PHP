#!/usr/bin/php
<?php
    if ($argc != 2) {
        echo "Incorrect Parameters\n";
        exit();
    }
    $calc = str_replace(" ", "", $argv[1]);
    $one = intval($calc);
    $one_len = strlen($one);
    $kek = substr($calc, $one_len, 1);
    $kek_len = strlen($kek);
    $two = substr($calc, $one_len + $kek_len);
    if (!is_numeric($one) || !is_numeric($two)){
        echo "Syntax Error\n";
        exit();
    }
    if ($kek == "*")
        echo $one * $two;
    else if ($kek == "+")
        echo $one + $two;
    else if ($kek == "-")
        echo $one - $two;
    else if ($kek == "/")
        echo $one / $two;
    else if ($kek == "%")
        echo $one % $two;
    else
    {
        echo "Syntax Error\n";
        exit();
    }
    echo "\n";
?>