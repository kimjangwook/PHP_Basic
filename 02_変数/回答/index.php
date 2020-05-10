<?php


/*
 * 問題１
 */

$name = 'Kim Jangwook';
$reason = 'ステキなウェブアプリケーションが作りたいです。';

echo 'お名前：'.$name.PHP_EOL;
echo 'PHPを勉強しようとしている理由：'.$reason.PHP_EOL;

// 下記のような書き方も可能です。

echo "お名前：$name\n";
echo "PHPを勉強しようとしている理由：$reason\n";

/*
 * 問題２
 */

$week = 1;
$arr = [
    'days' => $week * 7,
    'hours' => $week * 7 * 24,
    'minutes' => $week * 7 * 24 * 60,
    'seconds' => $week * 7 * 24 * 60 * 60,
];

echo '1週間は'.$arr['days'].'日で時間に変えると'.$arr['hours'].'時間、分に変えると'.$arr['minutes'].'分、秒に変えると'.$arr['seconds'].'秒です。'.PHP_EOL;