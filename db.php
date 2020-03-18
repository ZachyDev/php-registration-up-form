<?php
    require_once('conn.php');
    // get the form inputs
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $path= $_POST['path'];
    $pass = md5($_POST['pass']);

    $query = "INSERT INTO `register` (`Username`, `Gender`, `Path`, `Password`) VALUES ('$username', '$gender', '$path', '$pass');";
    if(mysqli_query($conn,$query)){
        echo "Thanks for signing up,you will receive weekly notification to " . $username;
    }else{
        echo "something went wrong;";
    }
?>