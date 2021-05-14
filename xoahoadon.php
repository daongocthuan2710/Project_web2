<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $id=$_POST['id'];
    $sql = "DELETE FROM `hoadon` WHERE IdHoaDon='$id'";
    $id=$_POST['id'];
    $sql2 = "DELETE FROM `cthoadon` WHERE IdHoaDon='$id'";
    $result=mysqli_query($conn, $sql2);
    if (mysqli_query($conn, $sql)) {
        echo "Hủy hóa đơn thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    
?>