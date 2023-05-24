<?php

// echo readfile("./hello.txt");

// $opened = fopen("./hello.txt", "r") or die("File could not be opened");
$opened = fopen("./hello.txt", "a+") or die("File could not be opened");

// echo fread($opened, filesize("./hello.txt"));

fwrite($opened, "this is what Wrote");

echo fgetc($opened);

// while(!feof($opened)){
//     echo fgets($opened);
// }


fclose($opened);