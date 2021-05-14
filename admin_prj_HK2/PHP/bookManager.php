<?php
    $res = "";
    require_once('../utils/connect_db.php');
    if(isset($_POST["idProd"])){
        $idProd = $_POST["idProd"];
        $typeActionProd = $_POST["typeActionProd"];
        if($typeActionProd == "delete") {
            ['deleteBook' => $check] = require '../entities/sach.php';
            $flag = $check($conn,$idProd);
            if(!$flag) {
                $res = $res."<script>alert('xóa thất bại');</script>";
            } else {
                $res = $res."<script>alert('xóa thành công');</script>";
            }
        } else if($typeActionProd == "findProd") {
            $selectType = "";
            ['findBookById' => $func] = require '../entities/sach.php';
            $book = $func($conn,$idProd);
            $res = $res . "<script>document.getElementById('Idsach').value='".$book['IdSach']."';document.getElementById('TenSach').value='".$book['TenSach']."';document.getElementById('DonGia').value='"
            .$book['DonGia']."';document.getElementById('TheLoai').value='".$book['IdTheLoai']."';document.getElementById(\"NXB\").value = '".$book['IdNXB']."';document.getElementById(\"NgayXB\").value = '"
            .$book['NgayXB']."';document.getElementById(\"author\").value = '".$book['IdTacGia']."';document.getElementById(\"NoiDungABC\").value = '';
            document.getElementById(\"TonKho\").value = '".$book['TonKho']."';document.getElementById('form-edit-product').style.display='block';</script>";

        }
    }

    if(isset($_POST['Idsach'])){

        $id = $_POST["Idsach"];
        $ten = $_POST["TenSach"];
        $gia = $_POST["DonGia"];
        $theloai = $_POST["TheLoai"];
        $noidung = $_POST["NoiDung"];
        $hinhanh = "";
        $NXB = $_POST["NXB"];
        $NgayXB = $_POST["NgayXB"];
        $tacgia = $_POST["author"];
        $TonKho = $_POST["TonKho"];
        if(isset( $_FILES['HinhAnh'])) {
            //upload file
            $file = $_FILES['HinhAnh'];
   
            $fileName = $_FILES['HinhAnh']['name'];
            $fileTmpName = $_FILES['HinhAnh']['tmp_name'];
            $fileSize = $_FILES['HinhAnh']['size'];
            $fileError = $_FILES['HinhAnh']['error'];
            $fileType = $_FILES['HinhAnh']['type'];
            
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png','pdf');
    
            if (in_array($fileActualExt,$allowed)) {
                if ($fileError === 0){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = '../product/'.$fileNameNew;
                    $hinhanh = $hinhanh . "product/".$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                } else {
                    echo "There was an error uploading your file!";
                }
            } else {
                echo "You cannot upload file of this type !";
            }
        }
        
        if(!empty($id)) {
            ['updateBook' => $func] = require '../entities/sach.php';
            $productUpdate = $func($conn,array($ten,$theloai,$noidung,$hinhanh,$NgayXB,$NXB,$tacgia,$gia,$TonKho),$id);
            if(!$productUpdate) {
                $res = "<script>setTimeout(function() {alert('sửa thông tin sách thất bại !');}, 500)</script>";
            } else {
                $res = "<script>setTimeout(function() {alert('sửa thông tin sách thành công !');}, 500)</script>";
            }     
        } else {
            ['insertBook' => $func] = require '../entities/sach.php'; 
            $productCreate = $func($conn,array($ten,$theloai,$noidung,$hinhanh,$NgayXB,$NXB,$tacgia,$gia,$TonKho));
            if(!$productCreate) {
                $res = "<script>setTimeout(function() {alert('thêm thông tin sách thất bại !');}, 500)</script>";
            } else {
                $res = "<script>document.getElementById('form-edit-product').style.display='none'; setTimeout(function() {alert('thêm thông tin sách thành công  !');}, 500)</script>";
            }
        }
    }
    require_once('../utils/close_db.php');
    echo $res;
?>