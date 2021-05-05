<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM tacgia";
    $result = mysqli_query($conn,$sql);

    $tacgia_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $tacgia_arr[] = $row;
        }
    } else {
        echo "0 results";
    }

    // return $sach_arr;
    echo json_encode($tacgia_arr);
    mysqli_close($conn);
    
?>