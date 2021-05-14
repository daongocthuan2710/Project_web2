<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }

    mysqli_query($conn,"SET NAMES 'utf8'");

    
    $sql = "SELECT* FROM taikhoan";
    $result = mysqli_query($conn,$sql);

    $tk_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $tk_arr[] = array(
                'IdTK' => $row['IdTK'],
                'USERNAME' => $row['USERNAME'],
                'PASSWORD' => $row['PASSWORD'],
                'MaQuyen' => $row['MaQuyen'],
                'TrangThai' => $row['TrangThai'],
                'TEN' => $row['TEN'],
                'HO_DEM' => $row['HO_DEM'],
                'SDT' => $row['SDT'],
                'email' => $row['email'],
                'DiaChi' => $row['DiaChi'],
            );
        }
    } else {
        echo "0 results";
    }

    echo json_encode($tk_arr);
    mysqli_close($conn);


?>