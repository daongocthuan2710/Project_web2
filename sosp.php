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
    // if($taikhoan==0){$taikhoan='temp';}
    $giohang = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['IdKH']==$taikhoan){
                $giohang[] = $row;
            }
        }
    } else {

    }
    
    echo count($giohang);
    
    mysqli_close($conn);
?>