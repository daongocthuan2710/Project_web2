<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $sql = "SELECT* FROM giohang";
    $result = mysqli_query($conn,$sql);

    $sqlx = "SELECT* FROM sach";
    $resultx = mysqli_query($conn,$sqlx);
    $sach=array();
    $giohang = array();
    $giohang1 = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $giohang[] = $row;
            $giohang1[] = $row['IdDonHang'];
        }
    } else {
        // echo "0 results";
    }

    if ($resultx->num_rows > 0) {
        while($row = mysqli_fetch_array($resultx)) {
            $sach[] = $row;
        }
    }


    $x=$_POST['manggiohang'];
    $taikhoan=$_POST['taikhoan'];
    $soluongthem=$_POST['soluong'];
    // if($taikhoan==0){$taikhoan='temp';}
    $tonkho=0;

    for($i=0;$i<count($giohang);$i++){
        
        if($giohang[$i]['IdDonHang']===$x){
            for($e=0;$e<count($sach);$e++){
                if($sach[$e]['IdSach']==$x){
                    $tonkho=$sach[$e]['TonKho'];
                }
            }
            $soluong=$giohang[$i]['SoLuong']+$soluongthem;
            if($soluong>$tonkho) $soluong=$tonkho;
            // echo $giohang[$i]['soluong'];
            $mang= $giohang[$i]['IdDonHang'];
            
            $query = "UPDATE giohang SET SoLuong = $soluong WHERE IdDonHang = $mang";
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
            $sql1 = "INSERT INTO giohang (IdDonHang, SoLuong, IdKH) VALUES ('$x', $soluongthem, '$taikhoan')";
            if (mysqli_query($conn, $sql1)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
        }
    }           
    mysqli_close($conn);
    
?>