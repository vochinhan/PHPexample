<?php

$file = fopen("MusicLeaderboard.txt", "r");

$str = fgets($file);

echo $str;

$arr = explode(".", $str);

// $str = rtrim($str,".");


echo "<pre>";
var_dump($arr);
echo "</pre>";
?>