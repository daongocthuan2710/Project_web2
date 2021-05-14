<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM taikhoan";
    $result = mysqli_query($conn,$sql);

    $taikhoan=0;
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['TrangThai']== 1){
                $taikhoan=$row['IdTK'];
            }
        }
    } else {
        echo "0 results";
    }

    echo $taikhoan;
    mysqli_close($conn);
    
?>