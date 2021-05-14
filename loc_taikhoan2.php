<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM taikhoan";
    $result = mysqli_query($conn,$sql);

    $taikhoan=2;
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['TrangThai']== 1){
                $pos = strpos($row['IdTK'], 'KH',0);
                if($pos===0){
                    $taikhoan=$row['IdTK'];
                }
                else{
                    $taikhoan=1;
                }
            }
        }
    } else {
        echo "0 results";
    }

    echo $taikhoan;
    mysqli_close($conn);
    
?>