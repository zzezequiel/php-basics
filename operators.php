<?php
$num1 = 2;
$num2 = 10;

echo "<h2>arithmetic operators:</h2>";

echo "<h3>sum</h3>";
var_dump($num1 + $num2);
echo "<h3>rest</h3>";
var_dump($num1 - $num2);
echo "<h3>multiplication</h3>";
var_dump($num1 * $num2);
echo "<h3>percent</h3>";
var_dump($num1 % $num2);

echo "<h2>comparison operators:</h2>";


    if($num1==2){
        if($num1!=$num2){
            if($num1<$num2){
                if($num2>$num1){
                    
                   echo "conditions works";
                    
                }
            }
        }
    }

 

echo "<h2>logical operators:</h2>";

if ($num1 == 2 || $num2 == 10){
    if($num1 == 2 && $num2 == 10) {
        if ($num1 != 0) {
            echo "logical operators works";
        }
    }
}
 
?>