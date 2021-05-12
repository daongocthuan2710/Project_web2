<?php 
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM Sach";
    $result = mysqli_query($conn,$sql);
    $id=$_GET['id'];
    $sach = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['IdSach']==$id)
                {$sach[]=$row;}
        }
    } else {
        echo "0 results";
    }

    $sql1 = "SELECT* FROM nxb";
    $result1 = mysqli_query($conn,$sql1);
    $nxb = array();
        if ($result1->num_rows > 0) {
            while($row = mysqli_fetch_array($result1)) {
                if($row['IdNXB']==$sach[0]['IdNXB']){
                    $nxb[]=$row;
                }
            }
        } else {
            echo "0 results";
        }

    $sq3 = "SELECT* FROM theloai";
    $result3 = mysqli_query($conn,$sq3);

    $theloai = array();
    if ($result3->num_rows > 0) {
        while($row = mysqli_fetch_array($result3)) {
            if($row['IdTheLoai'==$sach[0]['IdTheLoai']]){
                $theloai[]=$row;
            }
        }
    } else {
        echo "0 results";
    }

    $sq4 = "SELECT* FROM tacgia";
    $result4 = mysqli_query($conn,$sq4);

    $tacgia = array();
    if ($result4->num_rows > 0) {
        while($row = mysqli_fetch_array($result4)) {
            if($row['IdTacGia'==$sach[0]['IdTacGia']]){
                $tacgia[]=$row;
            }
        }
    }
    else {
        echo "0 results";
    }
    








?>