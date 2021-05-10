<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM Sach";
    $result = mysqli_query($conn,$sql);

    $sach_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $sach_arr[]=$row;
        }
    } else {
        echo "0 results";
    }

    echo json_encode($sach_arr);
    mysqli_close($conn);
    
?>