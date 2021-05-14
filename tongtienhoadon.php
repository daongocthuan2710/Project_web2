<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM hoadon";
    $result = mysqli_query($conn,$sql);
    $taikhoan=$_POST['taikhoan'];
    $tongtien = 0;
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['IdKH']==$taikhoan && $row['TrangThai']==1 ){
                $tongtien =$tongtien+ $row['TongTien'];
            }
        }
    } else {
        echo "0 results";
    }

    // return $sach_arr;
    echo $tongtien;
    mysqli_close($conn);
    
?>