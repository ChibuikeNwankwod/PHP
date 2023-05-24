<?php

$arr =[4,3,2,5,33,2,4,2,5,7,111,1,2,3,1];


// function clb($item){
//     echo $item;
// }

// array_map("clb", $arr);


$jsond = json_encode($arr);


// echo $jsond;


$jsondecode= json_decode($jsond, true);

echo var_dump($jsondecode);