<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }

    mysqli_query($conn,"SET NAMES 'utf8'");

    
?>