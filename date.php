<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");


    $taikhoan=$_POST['taikhoan'];
    $ngaytu=$_POST['ngaytu'];
    
    if($ngaytu==''){$ngaytu='2000/10/27';}
    $ngayden=$_POST['ngayden'];
    if($ngayden==''){$ngayden='CURRENT_DATE';}
    $limit=$_POST['limit'];
    if($limit!=''){$limit='LIMIT '.$limit;}
    $sql = "SELECT * from hoadon where NgayMua between '$ngaytu' AND '$ngayden' AND IdKH='$taikhoan' $limit";
    $result = mysqli_query($conn,$sql);
    if ($result) {
    } else {
    }
    $hoadon_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $hoadon_arr[] = $row;
        }
    }

    echo json_encode($hoadon_arr);
    mysqli_close($conn);
    
?>