<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM taikhoan";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $x=$row['IdTK'];
            $query = "UPDATE taikhoan SET TrangThai = 0 WHERE IdTK = '$x'";
            if ($conn->query($query) === TRUE) {

            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);

            }
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    
?>