<?php 

echo "<h1>Conditionals</h1><br>";



if (date('D')== 'Fri'){
    echo "We are on friday";
}
else {
    echo "Today is $date";
};

echo "<br><br>";

if (date('M') == "Oct"){
    echo "We are in October";
}
else {
    echo "We are in ",date('M') ;
};


echo "<br><br>";

if(date('i')<10){
    echo "the current minute is less than 10";
}
else if(date('i')>15){
    echo "the current minute is more than 15";
}
else {
    echo "does not meet any conditions";
}

echo "<br><br>";

$day = date('D');

switch ($day){
    case "Mon":
        echo "Today is monday";
        break;
    case "Tue":
        echo "Today is tuestaday";
        break;
    case "Wed":
        echo "Today is wednesday";
        break;
    case "Thu":
        echo "Today is thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
}


?>