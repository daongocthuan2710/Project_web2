<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");
    
    $id=$_POST['id'];

    if($id==0){
        $sql = "DELETE FROM `giohang` WHERE IdKH='KH1'";
    }
    else if($id==1){
        $query = "SELECT * FROM `hoadon`";
        $result = mysqli_query($conn,$query);
        $today = date("Y-m-d");
        $hoadon_arr = array();
        $idhoadon_arr = array();
        if ($result->num_rows > 0) {
            while($row = mysqli_fetch_array($result)) {
                $hoadon_arr[] = $row;
                $idhoadon_arr[]=$row['IdHoaDon'];
            }
        }

        $giohang_arr=array();
        $idgiohang_arr=array();
        $query2 = "SELECT * FROM `giohang`";
        $result2 = mysqli_query($conn,$query2);
        if ($result2->num_rows > 0) {
            while($row = mysqli_fetch_array($result2)) {
                $giohang_arr[] = $row;
                $idgiohang_arr[]=$row['IdDonHang'];
            }
        }

        $sach_arr=array();
        $query3 = "SELECT * FROM `sach`";
        $result3 = mysqli_query($conn,$query3);
        if ($result3->num_rows > 0) {
            while($row = mysqli_fetch_array($result3)) {
                $sach_arr[] = $row;
            }
        }
        echo "sach".$sach_arr;
        
        $hd="HD".mt_rand(1, 600);
        echo $hd;
        $i=1;
        while($i>0){
            
            if(in_array($hd, $idhoadon_arr)){
                $hd="HD".mt_rand(1, 600);
            }
            else{ break;}
            $i++;
        }
        $tongtien=0;

        for($x=0;$x<count($sach_arr);$x++){
            if(in_array($sach_arr[$x]['IdSach'], $idgiohang_arr)){
                echo "  ".$sach_arr[$x]['IdSach']."  ";
                for($k=0;$k<count($giohang_arr);$k++){
                    if($giohang_arr[$k]['IdDonHang']==$sach_arr[$x]['IdSach']){
                        $tongtien+=$sach_arr[$x]['DonGia']*$giohang_arr[$k]['soluong'];
                        
                        $idsach=$sach_arr[$x]['IdSach'];
                        $soluong=$giohang_arr[$k]['soluong'];
                        $dongia=$sach_arr[$x]['DonGia'];
                        $query4="INSERT INTO `cthoadon`(`IdHoaDon`, `IdSach`, `SLBan`, `DonGia`) 
                        VALUES ('$hd','$idsach',$soluong,$dongia)";
                        $result8 = mysqli_query($conn,$query4);
                        if (mysqli_query($conn, $query4)) {
                            echo "Thêm vào hóa đơn chi tiết thành công";
                        } else {
                            echo "Error: " . $query4 . "<br>" . mysqli_error($conn);
                        }
                    }
                }
            }
        }




        $sql2="INSERT INTO `hoadon`(`IdHoaDon`, `IdKH`, `IdNV`, `TongTien`, `NgayMua`)
                            VALUES ('$hd','KH1','NV1',$tongtien,'$today')";
        $result9 = mysqli_query($conn,$sql2);
        if (mysqli_query($conn, $sql2)) {
            echo "Bạn đã thêm giỏ hàng vào hóa đơn";
        } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
        }
        $sql = "DELETE FROM `giohang` WHERE IdKH='KH1'";
    }
    else{
        $sql = "DELETE FROM `giohang` WHERE IdKH='KH1' AND IdDonHang=$id";
    }

    $result10 = mysqli_query($conn,$sql);
            if (mysqli_query($conn, $sql)) {
                echo "Bạn đã xóa giỏ hàng";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }


    mysqli_close($conn);
    
?>