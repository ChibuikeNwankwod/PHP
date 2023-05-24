<?php
session_start();    
echo var_dump($_COOKIE);

$user = array("name"=>"Daniel", "email"=>"daniel@mail.com","phone"=>"90922");

$jsondata = json_encode($user);

setcookie('_user',$jsondata, time() + (86400 * 1), "/");


$cookie = $_COOKIE['_user'];

$decodeCookie = json_decode($cookie, true);

echo var_dump($decodeCookie);

if(count($_COOKIE) > 0){
    echo 'cookie is enabled';

    
}

echo "from session" . $_SESSION['username'];



session_unset();

// setcookie("_user", "", time() - 86400,"/");