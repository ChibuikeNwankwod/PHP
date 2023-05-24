<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //This is a comment
        # This is a comment
        /*
            dhskjkjfdsa

            dsafakdhfkhjk

        */

        // $name = ' hello Daniel';

        // $confirm =  echo('hello world');

        // echo strlen($name);
        // echo str_word_count($name);
        // echo strrev($name);

        // echo strpos($name, 'Daniel');

        // echo str_replace('Daniel', 'Peter', $name);

        $num = 5;
        $num_str ='8';
        $float = 3.5;

        $casted_float = (int)$float;
        $cast_str = (int)$num_str; 
        
        define('name', 'Daniel');



        echo name;

        function sayHi(){
            // echo global $name;
            echo name ; 
        }

        sayHi();


    //    echo var_dump($cast_str);
    //    echo $casted_float;

// and &&
// or ||
    //    echo pi();
    //    echo min(8,13, 24);
    //    echo max(8,13, 24);

    // echo abs(-300);

    // echo sqrt(2);

    // echo round(2.8);

    echo rand(1,10);

    echo 'Hello ' .name;

   


        // echo "hello $name";

        // echo $confirm;


        // function sayHi($person){
        //     static $counter =0;
        //     global $name;

        //     $counter+=1;
        //     echo('hello ' . $counter);


        // }




    
        // sayHi('John Doe');
        // sayHi('John Doe');
        // sayHi('John Doe');
        // sayHi('John Doe');
        // sayHi('John Doe');

        if( $num == 5){
            echo 'num is equal to 5';
        } elseif(num > 5){
            echo 'num is greater';
        }
        
        else{
            echo 'number is not equal';
        }

        switch($num){
            case 1: echo ' num is one';
            break;
            case 2: echo 'num is two';
            break;
            default: echo 'num is not one or two';
        }
    ?>
</body>
</html>