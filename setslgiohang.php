<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $value=$_POST['value'];
    $id=$_POST['id'];
    $sql = "UPDATE `giohang` SET `SoLuong`=$value WHERE `IdDonHang`='$id'";
    $result = mysqli_query($conn,$sql);

    
    mysqli_close($conn);
    
?>