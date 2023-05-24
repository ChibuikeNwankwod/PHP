<?php

function divide($num1, $num2){
   if($num1 <=0) throw new Exception("cannot divide by zero");
   else return $num1 / $num2;
}


try{
    echo divide(0,5);
}catch(Exception $error){
    echo $error->getMessage();
    echo $error->getCode();
    echo $error->getLine();
}