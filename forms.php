<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <form action="<?php //htmlspecialchars($_SERVER['PHP_SELF']) ?>" > -->

<form action="./formhandler.php" method="post">

<input type="text" name="username" id="" placeholder="Username">
<input type="email" name="email" id="" placeholder="Email">
<input type="password" name="password" id="" placeholder="Password">
<input type="submit" name="submit">


<?php
// function sanitizeData($data){
//     $data = stripslashes($data);
//     $data = trim($data);
//     $data = htmlspecialchars($data);

//     return $data;
// }

// if($_SERVER['REQUEST_METHOD'] =='GET'){

//     if(!empty($_GET['submit'])){
//         $username = sanitizeData($_GET['username']);
//         $email = sanitizeData($_GET['email']);
//         $password = sanitizeData($_GET['password']);

        
//         echo "$email <br> $username <br> $password <br>";
//     }


// }
// ?>
</form>
    
</body>
</html>