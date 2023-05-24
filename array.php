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
        // $students = array('Daniel','Peter','James');
        // $students = ['Daniel','Peter','James'];
        // $nums =[4,10,18,45,76];
        // $assoc_students = array('name'=>'Daniel', 'courses'=>'web development');

        // echo $assoc_students['name'];

        // for($student =0 ; $student < count($students); $student++){
        //     echo $students[$student]. "<br>";
        // }
        // echo $multi_students[2][0];


        // for($row=0; $row < count($multi_students); $row++){
        //     // echo $row.' row <br>';
        //     for($cols=0; $cols < count($multi_students[$row]); $cols++){
        //         echo $multi_students[$row][$cols]."<br>";
        //     }
        // }

    //     $sum = 0;
    //     for($num = 0; $num < count($nums); $num++){
    //         $sum+=$nums[$num];
    //     }
    // echo $sum;


    // foreach($students as $student ){
    //     echo $student ."<br>";
    // }

    // foreach($assoc_students as $student=>$value){
    //     echo $student." ". $value ;
    // }

    $multi_students = [[1,5,2,6,7],[4,3,6,8],[6,3,8,3]];

        $total = 0;
    for($row = 0; $row < count($multi_students); $row++){
        $row_sum=0;

        for($col=0; $col < count($multi_students[$row]); $col++){

            $row_sum+=$multi_students[$row][$col];
        }

        $total+=$row_sum;
        echo "Row $row: $row_sum";

    }
    
   echo "<br> total $total";

    ?>




    <script>
      
    </script>
</body>
</html>



