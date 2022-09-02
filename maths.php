<?php

echo "<h1>Maths</h1>";

function sum(){
    $num1 = 10;
    $num2 = 5;
    return $num1 + $num2;
}
$result = sum();
echo $result;
echo "<br>";

function higth($sum1, $sum2){
   return max($sum1, $sum2);
}
$result = higth(2,5);
echo $result;

echo "<br>";

function low($res1,$res2){
    return min($res1,$res2);
}
$send = low(1,4);
echo $send;
echo "<br>";

function random(){
   return rand(1,10);
   
}
$randoms = random();
echo $randoms;

?>