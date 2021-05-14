<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $value=$_POST['value'];
    $sql = "SELECT IdSach, SUM(SLBan) AS Tong FROM cthoadon GROUP BY IdSach ORDER BY Tong DESC LIMIT $value;";
    $result = mysqli_query($conn,$sql);

    $cthoadon_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $cthoadon_arr[] = $row['IdSach'];
        }
    } else {
        echo "0 results";
    } 

    $sql2 = "SELECT* FROM Sach";
    $result = mysqli_query($conn,$sql2);

    $sach_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if(in_array($row['IdSach'],$cthoadon_arr)){
                $sach_arr[]=$row;
            }
        }
    } else {
        echo "0 results";
    }

    echo json_encode($sach_arr);
    mysqli_close($conn);
    
?>