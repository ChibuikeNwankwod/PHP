<?php

function sanitizeData($data){
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);

    return $data;
}

function validateUserName($data) {

    if(empty($data)){
        return true;
    }
    if(is_numeric($data)){
        return true;
    }

    return false;

}

function validateEmail($data){
    if(empty($data)) return true;

    if(!filter_var($data, FILTER_VALIDATE_EMAIL)) return true;


    return false;
    
}


function validatePassword($data){
    if(empty($data)) return true;

    $regexp = preg_match("/.*[a-zA-Z0-9\W]{8}/", $data);

    echo $regexp?"True" : "false";

    if(!$regexp) return true;

    return false;
}

// validatePassword("YDHaa9");
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $emailError = validateEmail($_POST['email']);
     $usernameError = validateUserName($_POST['username']);
     $passwordError= validatePassword('password');
    
    $email = !$emailError ?  sanitizeData($_POST['email']) :"";
    $username = !$usernameError ?  sanitizeData($_POST['username']) :"";
    $password = !$passwordError ? sanitizeData($_POST['password']) :"";



    echo $emailError  ? "Pleaase enter a valid email address" :"";
    echo $usernameError ? 'Username is required and must not be a number ':"";
    echo $passwordError ? 'Password must not be empty and must contain atleast 8 characters':"";

   echo "$email <br> $username <br> $password <br>";
}