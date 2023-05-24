<?php

function pageHeader($title, $description,$keywords){
 
    echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='description' content='$description'  >
            <meta name='keywords' content='$keywords'>
            <title>$title</title>
        </head>
        <body>
            
        </body>
        </html>
    
    ";
}