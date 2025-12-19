<?php

require '../vendor/autoload.php';

use Carbon\Carbon;

// 各種値の取得
$dt = Carbon::now();
echo 'year => ' . $dt->year . '<br>';
echo 'month => ' . $dt->month . '<br>';
echo 'day => ' . $dt->day . '<br>';
echo 'dayOfWeek => ' . $dt->dayOfWeek . '<br>';
echo 'hour => ' . $dt->hour . '<br>';
echo 'minute => ' . $dt->minute . '<br>';
echo 'second => ' . $dt->second . '<br>';

// 日付の計算
// 年の計算
$dt = Carbon::now();
echo 'addYear => ' . $dt->addYear() . '<br>';
$dt = Carbon::now();
echo 'subYear => ' . $dt->subYear() . '<br>';
// 月の計算
$dt = Carbon::now();
echo 'addMonth => ' . $dt->addMonth() . '<br>';
$dt = Carbon::now();
echo 'subMonth => ' . $dt->subMonth() . '<br>';
// 日の計算
$dt = Carbon::now();
echo 'addDay => ' . $dt->addDay() . '<br>';
$dt = Carbon::now();
echo 'subDay => ' . $dt->subDay() . '<br>';
// 時間の計算
$dt = Carbon::now();
echo 'addHour => ' . $dt->addHour() . '<br>';
$dt = Carbon::now();
echo 'subHour => ' . $dt->subHour() . '<br>';
// 分の計算
$dt = Carbon::now();
echo 'addMinute => ' . $dt->addMinute() . '<br>';
$dt = Carbon::now();
echo 'subMinute => ' . $dt->subMinute() . '<br>';
// 秒の計算
$dt = Carbon::now();
echo 'addSeconds => ' . $dt->addSeconds() . '<br>';
$dt = Carbon::now();
echo 'subSeconds => ' . $dt->subSeconds() . '<br>';
