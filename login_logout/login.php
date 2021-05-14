<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM taikhoan";
    $result = mysqli_query($conn,$sql);
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['USERNAME']==$user && $row['PASSWORD']==$pass ){
                if($row['MaQuyen']==NULL){
                    $x=$row['IdTK'];
                    $query = "UPDATE taikhoan SET TrangThai = 1 WHERE IdTK = '$x'";
                    if ($conn->query($query) === TRUE) {
                        echo "Dữ liệu đã được update";
                    } else {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                        // echo "thất bại";
                    }
                }
            }
        } 
    }

    echo json_encode($taikhoan);
    mysqli_close($conn);
    
?>