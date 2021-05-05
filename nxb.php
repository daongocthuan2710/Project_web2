<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM nxb";
    $result = mysqli_query($conn,$sql);

    $nxb_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $nxb_arr[] = $row;
        }
    } else {
        echo "0 results";
    }

    // return $sach_arr;
    echo json_encode($nxb_arr);
    mysqli_close($conn);
    
?>