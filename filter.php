<?php

$username = "<script> alert('hacked') </script>";

$validate = filter_var($username, FILTER_SANITIZE_STRING);

$validate_num = filter_var(1, FILTER_VALIDATE_INT, array("options"=> array("min_range"=>10, "max_num"=>20)));



echo $validate_num?"true":"false";