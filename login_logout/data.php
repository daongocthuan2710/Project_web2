<?php 

// conect database
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

  $id = $_POST['IdTK'];     
  $user= $_POST['user']; // nhận giá trị từ ajax gửi lên
  $pass= $_POST['pass'];
  $ten= $_POST['TEN'];
  $ho_dem= $_POST['HO_DEM'];
  $sdt= $_POST['SDT'];
  $email= $_POST['email'];
  $DiaChi = $_POST['Dia_Chi'];
    $query = "INSERT INTO taikhoan (IdTK, USERNAME, PASSWORD, MaQuyen, TrangThai, TEN, HO_DEM, SDT, email, DiaChi) VALUE('$id','$user', '$pass', null, 0,'$ten', '$ho_dem', '$sdt', '$email', '$DiaChi' )";// câu truy vấn
            if ($conn->query($query) === TRUE) {  // thực hiện câu truy vấn
                echo "Dữ liệu đã được update";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
                // echo "thất bại";
            }
    $result = mysqli_query($conn,$sql);

    // echo "$user";

    mysqli_close($conn); // đóng database
?>