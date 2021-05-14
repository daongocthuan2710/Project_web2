<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");

    $taikhoan=$_POST['taikhoan'];
    $sql = "SELECT* FROM giohang WHERE IdKH='$taikhoan'";
    $result = mysqli_query($conn,$sql);

    $giohang = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {
            $giohang[] = $row;
        }
    }

    $sql1 = "SELECT* FROM Sach";
    $result1 = mysqli_query($conn,$sql1);
    $sach = array();
    if ($result1->num_rows > 0) {
        while($row = mysqli_fetch_array($result1)) {
            $sach[] = $row;
        }
    }

    $thongbao=0;
    $i=0;
    while( $i<count($giohang)){
        for($x=0;$x<count($sach);$x++){
            if($sach[$x]['IdSach']==$giohang[$i]['IdDonHang'] ){
                if($sach[$x]['TonKho'] <$giohang[$i]['SoLuong']){
                        $thongbao="Tựa sách ".$sach[$x]['TenSach']." trong kho không đủ";
                        break;
                    }
                }
            
        }
        $i++;
    }
    
    echo $thongbao;
    mysqli_close($conn);
?>