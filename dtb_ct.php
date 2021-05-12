<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM Sach";
    $result = mysqli_query($conn,$sql);
    $id=$_GET['id'];
    $sach = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['IdSach']==$id)
                {$sach[]=$row;}
        }
    } else {
        echo "0 results";
    }


    mysqli_close($conn);
    
?>