<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");
    if (mysqli_connect_error())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    { echo "Success to connect to MySQL <br>"; }



    $sql = "SELECT* FROM Sach";
    $result = mysqli_query($conn,$sql);

    $sach_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_object($result)) {
            // echo "IdSach: " . $row["IdSach"]. "   TenSach: " . $row["TenSach"]. "   DonGia: "
            //     . $row["DonGia"]."   HinhAnh: ".$row["HinhAnh"]."   NoiDung: ".$row["NoiDung"]. "<br>";
            $sach_arr[]=$row;
        }
    } else {
        echo "0 results";
    }

    echo $sach_arr;
    mysqli_close($conn);
?>