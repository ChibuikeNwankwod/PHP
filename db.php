<?php

$username ="daniel";
$password ="admin";
$host = "localhost";
$dbname ="digitec";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);

    // set the pdo error mode as an error exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo" connection successfully";

    $sqlCommand = 'CREATE TABLE IF NOT EXISTS students(
        id INT(20) PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(100),
        last_name VARCHAR(100),
        course VARCHAR(100),
        course_duration INT(10)

    )';


$table = $conn->exec($sqlCommand);

$addValue = '
        INSERT INTO students(first_name, last_name, course, course_duration) 
        VALUES("James", "Bond","Graphics design", 3)
';

$conn->exec($addValue);

$query = $conn->prepare('
    SELECT first_name,last_name, course FROM students WHERE id=3
');


$query->execute();
$result = $query->fetchAll();

echo var_dump($result);


}catch(PDOException $err){
    echo $err->getMessage();
}finally{
    $conn = null;
}