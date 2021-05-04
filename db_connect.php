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
            $sach_arr[] = array(
                'IdSach' => $row['IdSach'],
                'TenSach' => $row['TenSach'],
                'DonGia' => $row['DonGia'],
                'HinhAnh' => $row['HinhAnh'],
                'NoiDung' => $row['NoiDung']
            );
        }
    } else {
        echo "0 results";
    }

    // return $sach_arr;
    echo json_encode($sach_arr);
    mysqli_close($conn);
    
?>