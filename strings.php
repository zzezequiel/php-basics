<?php
echo "<h1>Strings</h1>";

$one = "i'm a variable";
echo "example of variables in strings: $one";

echo "<br><br>";
$conc = " + i'm concatening";
echo $one . $conc;

echo "<br><br>";

function chan (){
    $one = "i'd changed";
    return $one;
}
echo chan();

echo "<br><br>";

function buc (){
    $a = str_repeat("text + ",5);
    return $a;
}
echo buc();

echo "<br><br>";

function len(){
    $z = "Zvirgzdins";
    $l = strlen($z);
    return $z . $l;
}
echo len();
echo "<br><br>";

function fi(){
    $st = 'zvirgzdins';
    $pos = strpos($st, 'g');
    return $pos;
}
echo fi();

echo "<br><br>";

function aa(){
    $tex = "zvirgzdins";
    $cap = strtoupper($tex);
    return $cap;
}
echo aa();
echo "<br><br>";

function bb(){
    $tex = "ZVIRGZDINS";
    $z = strtolower($tex);
    return $z;
}
echo bb();

?>