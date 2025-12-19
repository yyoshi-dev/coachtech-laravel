<?php
$date = new DateTime();
// $date = new DateTime('1999-11-02 05:27:42');
echo 'Y-m-d H:i:s => ' . $date->format('Y-m-d H:i:s') . '<br>';

// インスタンスから各種値の取得
echo 'Y => ' . $date->format('Y') . '<br>';
echo 'm => ' . $date->format('m') . '<br>';
echo 'd => ' .  $date->format('d') . '<br>';
echo 'D => ' .  $date->format('D') . '<br>';
echo 'H => ' .  $date->format('H') . '<br>';
echo 'i => ' .  $date->format('i') . '<br>';
echo 's => ' .  $date->format('s') . '<br>';

// 様々な出力形式
echo 'DateTime::ATOM => ' .  $date->format(DateTime::ATOM) . '<br>';
echo 'DateTime::COOKIE => ' .  $date->format(DateTime::COOKIE) . '<br>';
echo 'DateTime::RSS => ' .  $date->format(DateTime::RSS) . '<br>';
echo 'DateTime::W3C => ' .  $date->format(DateTime::W3C) . '<br>';

// 日付の計算
// 年の計算
$date = new DateTime();
echo '-1 years => ' . $date->modify('-1 years')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo '1 years => ' . $date->modify('1 years')->format('Y-m-d H:i:s') . '<br>';
// 月の計算
$date = new DateTime();
echo '-1 months => ' . $date->modify('-1 months')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo '1 months => ' . $date->modify('1 months')->format('Y-m-d H:i:s') . '<br>';
// 日の計算
$date = new DateTime();
echo '-1 days => ' . $date->modify('-1 days')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo '1 days => ' . $date->modify('1 days')->format('Y-m-d H:i:s') . '<br>';
// 時間の計算
$date = new DateTime();
echo '-1 hours => ' . $date->modify('-1 hours')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo '1 hours => ' . $date->modify('1 hours')->format('Y-m-d H:i:s') . '<br>';
// 分の計算
$date = new DateTime();
echo '-1 minutes => ' . $date->modify('-1 minutes')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo '1 minutes=> ' . $date->modify('1 minutes')->format('Y-m-d H:i:s') . '<br>';
// 秒の計算
$date = new DateTime();
echo '-1 seconds => ' . $date->modify('-1 seconds')->format('Y-m-d H:i:s') . '<br>';
$date = new DateTime();
echo '1 seconds => ' . $date->modify('1 seconds')->format('Y-m-d H:i:s') . '<br>';
