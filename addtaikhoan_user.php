<?php 
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql1 = "SELECT* FROM khachhang";
    $result2 = mysqli_query($conn,$sql1);
    $khachhang = array();
    if ($result2->num_rows > 0) {
        while($row = mysqli_fetch_array($result2)) {
            $khachhang[]=$row['IdKH'];
        }
    }

    $sql2 = "SELECT* FROM nhanvien";
    $result3 = mysqli_query($conn,$sql2);
    $nhanvien = array();
    if ($result3->num_rows > 0) {
        while($row = mysqli_fetch_array($result3)) {
            $nhanvien[]=$row['IdNV'];
        }
    }

    $sql = "SELECT* FROM taikhoan";
    $result = mysqli_query($conn,$sql);
    $taikhoan_arr = array();
    $taikhoan=0;
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['MaQuyen']==NULL){
                if(!in_array($row['IdTK'],$khachhang))
                {
                    $id=$row['IdTK'];
                    $ten=$row['TEN'];
                    $hodem=$row['HO_DEM'];
                    $sdt=$row['SDT'];
                    $email=$row['email'];
                    $diachi=$row['diachi'];
                    $sql5="INSERT INTO `khachhang`(`IdKH`, `TenKH`, `Ho_Dem_KH`, `SDT`, `email`, `DiaChi`)
                    VALUES ('$id','$ten','$hodem','$sdt','$email','$diachi')";
                    $result9 = mysqli_query($conn,$sql5);
                    if (mysqli_query($conn, $sql5)) {}
                }
            }
            else{
                if(!in_array($row['IdTK'],$nhanvien))
                {
                    $id=$row['IdTK'];
                    $ten=$row['TEN'];
                    $hodem=$row['HO_DEM'];
                    $sdt=$row['SDT'];
                    $email=$row['email'];
                    $diachi=$row['diachi'];
                    $sql6="INSERT INTO `nhanvien`(`IdKH`, `TenKH`, `Ho_Dem_KH`, `SDT`, `email`, `DiaChi`)
                    VALUES ('$id','$ten','$hodem','$sdt','$email','$diachi')";
                    $result10 = mysqli_query($conn,$sql6);
                    if (mysqli_query($conn, $sql6)) {}
                }
            }
        }
    }

    mysqli_close($conn);
?>