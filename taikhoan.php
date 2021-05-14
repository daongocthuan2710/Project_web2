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

            if($row['USERNAME']==$user && $row['PASSWORD']==$pass ){

                if($row['MaQuyen']==NULL){
                    $x=$row['IdTK'];
                    $taikhoan=1;
                    $query = "UPDATE taikhoan SET TrangThai = 1 WHERE IdTK = '$x'";
                    if ($conn->query($query) === TRUE) {
                        
                    } 

                    $sql1 = "SELECT* FROM giohang WHERE IdKH=0";
                    $result1 = mysqli_query($conn,$sql1);
                    $giohang_arr = array();
                    if ($result1->num_rows > 0) {
                        while($row = mysqli_fetch_array($result1)) {
                            $giohang_arr[] = $row;
                        }
                    }

                    for($i=0;$i<count($giohang_arr);$i++){
                            $a=$giohang_arr[$i]['IdDonHang'];
                            $b=$giohang_arr[$i]['SoLuong'];
                            $sql2="INSERT INTO `giohang`(`IdDonHang`, `IdKH`, `SoLuong`)
                            VALUES ('$a','$x',$b)";
                            $result2 = mysqli_query($conn,$sql2);
                            if (mysqli_query($conn, $sql2)) {
                                
                            }  
                            $sql3 = "DELETE FROM `giohang` WHERE IdKH='0'";
                            $result3 = mysqli_query($conn,$sql3);

                            // $sql4="SELECT IdHoaDon, SUM(SLBan) AS Tong FROM giohang GROUP BY IdHoaDon";
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
        
    }
    echo json_encode($taikhoan);
    mysqli_close($conn);
    
?>