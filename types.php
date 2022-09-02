<?php

echo "<h1>types</h1>";

$boolean = true;
var_dump($boolean);

echo "<br>";

$integers = 10;
var_dump($integers);

$integers = 10.5;
var_dump($integers);

echo "<br>";

$string = "texto";
var_dump($string);

echo "<br>";

$array = array('manzana','banana','pera');
var_dump($array);

echo "<br>";

class example 
{
    public $one;
    public $two;
}
$example = new example();
$example->one=15;
var_dump($example);
?>