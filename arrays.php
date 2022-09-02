<?php
echo "<h1>Arrays</h1>";

$ar = array("a","b","c");
 var_dump($ar);

echo "<br><br>";

$arNum = array(1,2,5.5);
var_dump($arNum);

echo "<br><br>";

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  var_dump($cars);

echo "<br><br>";

var_dump(count($cars));

echo "<br><br>";

function m(){
    $us = array('ezequiel');
    $ue = array('zvirgzdins');
    $result = array_merge($us, $ue);
    return $result;
}
var_dump(m());


echo "<br><br>";

$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano");
var_dump($pila);

?>