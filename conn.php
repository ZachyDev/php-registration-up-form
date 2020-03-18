<?php
    require_once('config.php');
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    // check if the conncetion was successful
    if($conn){
        // echo "Connected to db";
    }else{
        echo "ERROR ". mysqli_connect_error();
    }
?>