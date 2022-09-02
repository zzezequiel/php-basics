<?php

for($tree = 1;$tree<=5;$tree++);
echo "example of for: $tree <br>";

$palm = array(1,2,3,4);
foreach($palm as $valor){
   echo $valor *2;
};


$bust = 1;
while($bust<=10){
    echo "<p>$bust</p>";
    $bust++;
}

$i = 0;
do {
    echo "eaxmple of do-while: $i";
    
} while ($i > 0);

?>