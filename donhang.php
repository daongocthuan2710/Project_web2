<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM giohang";
    $result = mysqli_query($conn,$sql);
    $taikhoan=$_POST['taikhoan'];
    // echo $taikhoan;
    // if($taikhoan==0){$taikhoan='temp';}
    $giohang_arr = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['IdKH']==$taikhoan){
                $giohang_arr[] = $row;
            }
        }
    } else {
        // echo "0 results";
    }
    // echo count($giohang_arr);
    echo json_encode($giohang_arr);
    mysqli_close($conn);
    
?>