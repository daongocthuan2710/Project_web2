<?php 
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM taikhoan";
    $result = mysqli_query($conn,$sql);
    $taikhoan_arr = array();
    $taikhoan=0;
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['TrangThai']==1){
                $taikhoan=$row;
            }
        }
    } else {
        echo "0 results";
    }

    echo json_encode($taikhoan);
    mysqli_close($conn);
?>