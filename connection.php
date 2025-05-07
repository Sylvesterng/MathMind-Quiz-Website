<?php
    //step 1 - create a connection to the database
    $server = 'localhost';//127.0.0.1
    $user = 'root';
    $password = '';
    $database = 'assignment';

    $connection = mysqli_connect($server,$user,$password,$database);
    if ($connection == false){
        die('Connection failed' . mysqli_connect_error());
    } 
    //else {
    //    echo 'Connection esthablished! <br>';
    //}
?>
