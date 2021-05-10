<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM giohang";
    $result = mysqli_query($conn,$sql);

    $giohang = array();
    $giohang1 = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $giohang[] = $row;
            $giohang1[] = $row['IdDonHang'];
        }
    } else {
        echo "0 results";
    }
    $x=$_POST['manggiohang'];
    
    for($i=0;$i<count($giohang);$i++){
        if($giohang[$i]['IdDonHang']===$x){
            $soluong=$giohang[$i]['soluong']+1;
            // echo $giohang[$i]['soluong'];
            $mang= $giohang[$i]['IdDonHang'];
            $query = "UPDATE giohang SET soluong = $soluong WHERE IdDonHang = $mang";
            if ($conn->query($query) === TRUE) {
                echo "Dữ liệu đã được update";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
                // echo "thấ    t bại";
            }
        }
    }  
                     
        if($x!=0){               
        if(in_array($x,$giohang1)){
                        echo "Không thêm sản phẩm mới";
                    } 
        else{
            $sql1 = "INSERT INTO giohang (IdDonHang, soluong, IdKH) VALUES ('$x', 1, 'KH1')";
            if (mysqli_query($conn, $sql1)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
        }
    }           
    mysqli_close($conn);
    
?>