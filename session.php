<?php

session_start();


$_SESSION["username"] = "Daniel";
$_SESSION["email"] ="daniel@email.com";


echo $_SESSION['username'];