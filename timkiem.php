<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM Sach";
    $result = mysqli_query($conn,$sql);

    $vehicle=$_POST['activitiesArray'];
    $sach_arr = array();
    $sach = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            // $sach_arr[] = array(
            //     'IdSach' => $row['IdSach'],
            //     'TenSach' => $row['TenSach'],
            //     'DonGia' => $row['DonGia'],
            //     'HinhAnh' => $row['HinhAnh'],
            //     'NoiDung' => $row['NoiDung'],
            //     'IdTheLoai' => $row['IdTheLoai'],
            //     'IdTacGia' => $row['IdTacGia'],
            //     'IdNXB' => $row['IdNXB'],
            //     'NgayXB' => $row['NgayXB'],
            //     'TonKho' => $row['TonKho']
            // );
            $sach_arr[]=$row;
        }
    } else {
        echo "0 results";
    }

    echo json_encode($vehicle);
    mysqli_close($conn);
    
?>