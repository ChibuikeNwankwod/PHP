<?php

// date_default_timezone_set("America/New_York"); // Change the default date and time 
// echo date("Y/m/d h:i:sa"); // display the date and time 
// $date = mktime(11,17, 29, 02, 12, 2019);
// echo date("Y/m/d h:i:sa", $date);

// $date = strtotime("10:30pm May 17 2023");
// echo date("Y/m/d h:i:sa", $date);

$cookie = $_COOKIE['_user'];

$decodeCookie = json_decode($cookie, true);

echo var_dump($decodeCookie);


$startDate = strtotime("Saturday");
$endDat = strtotime("+5 days", $startDate);

while($startDate < $endDat){
    echo date("M d", $startDate) . "<br>";
    $startDate = strtotime("+1 day", $startDate);
}

