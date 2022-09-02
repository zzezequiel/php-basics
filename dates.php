<?php

echo "<h1>DATES/TIMES</h1>";

$dateTime = new dateTime('today');
var_dump($dateTime);

echo "<br>";

$month = date('m');
var_dump($month);

echo "<br>";

$daynum = date('d');
var_dump($daynum);

echo "<br>";

$year = date('Y');
var_dump($year);

echo "<br>";

$minutes = date('i');
var_dump($minutes);

?>