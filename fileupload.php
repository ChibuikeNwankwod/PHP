<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
    <input type="file" name="picture">
    <input type="submit">
</form>


<?php 

// echo var_dump($_FILES);

if(!empty($_FILES['picture'])){
    $upload = 'uploads/';
    $filename = basename($_FILES['picture']['name']);
    $permanentLocation = $upload.$filename;
    $tmp_location = $_FILES['picture']['tmp_name'];

    $videoFormat = ["video/mp4", "video/mp3", "video/mkv"];
    $type = $_FILES['picture']['type'];

    if(in_array($type, $videoFormat)){
  
         if(move_uploaded_file($tmp_location, $permanentLocation)){
            echo 'file has been uploaded successfully';
         }else{
            echo 'File could not be uploaded';
         }
    }else{
        echo 'not in arrya';
    }


    // $checkPics =  getimageSize($_FILES['picture']["tmp_name"]);

    // echo var_dump($checkPics);    
}


?>

</body>
</html>