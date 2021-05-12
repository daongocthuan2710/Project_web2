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
    $taikhoan=0;
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['USERNAME']==$user && $row['USERNAME']==$pass ){
                if($row['MaQuyen']==NULL){
                    $x=$row['IdTK'];
                    $taikhoan=1;
                    $query = "UPDATE taikhoan SET TrangThai = 1 WHERE IdTK = '$x'";
                    if ($conn->query($query) === TRUE) {
                        
                    } 
                }
                else{
                    $x=$row['IdTK'];
                    $taikhoan=2;
                    $query = "UPDATE taikhoan SET TrangThai = 1 WHERE IdTK = '$x'";
                    if ($conn->query($query) === TRUE) {
                        
                    }
                }

            }

        }
    } else {
        
    }

    echo json_encode($taikhoan);
    mysqli_close($conn);
    
?>