<?php


/*
 * 問題１
 */

function sum($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}


function mul($a, $b) {
    return $a * $b;
}


function div($a, $b) {
    return $a / $b;
}


echo '１）234 + 456 = '.sum(234, 456).PHP_EOL;
echo '２）799 - 218 = '.sub(799, 218).PHP_EOL;
echo '３）213 × 783 = '.mul(213, 783).PHP_EOL;
echo '４）419 ÷ 832 = '.div(419, 832).PHP_EOL;
