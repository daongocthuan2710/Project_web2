<?php
    $res = "";
    require_once('../utils/connect_db.php');
    if(isset($_POST["Idacc"])){
        $Idacc = $_POST["Idacc"];
        $typeActionacc = $_POST["typeActionacc"];
        if(strcmp($typeActionacc , "findAcc") == 0) {
            $selectType = "";
            ['findTKById' => $func] = require '../entities/taikhoan.php';
            $tk = $func($conn,$Idacc);
            $res = $res . "<script>document.getElementById('IdTK').value='".$tk['IdTK']."';document.getElementById('USERNAME').value='".$tk['USERNAME']."';
            document.getElementById('PASSWORD').value='".$tk['PASSWORD']."';document.getElementById('MaQuyen').value='".$tk['MaQuyen']."';
            document.getElementById('TrangThai').value=".$tk['TrangThai'].";document.getElementById('form-edit-noti-acc').style.display='block';</script>";
        }    
        if(strcmp($typeActionacc , "delete") == 0) {
            ['deleteTK' => $check] = require '../entities/taikhoan.php';
            $flag = $check($conn,$Idacc);
            if(!$flag) {
                $res = $res."<script>alert('xóa thất bại');</script>";
            } else {
                $res = $res."<script>alert('xóa thành công');</script>";
            }}
        }

    if(isset($_POST['IdTK'])){

        $IdTK = $_POST["IdTK"];
        $USERNAME = $_POST["USERNAME"];
        $PASSWORD = $_POST["PASSWORD"];
        $MaQuyen = $_POST["MaQuyen"];
        $TrangThai = $_POST["TrangThai"];

        if(!empty($IdTK)) {
            ['updateTK' => $func] = require '../entities/taikhoan.php';
            $accountUpdate = $func($conn,array($USERNAME,$PASSWORD,$MaQuyen,$TrangThai),$IdTK);
            if(!$accountUpdate) {
                $res = "<script>setTimeout(function() {alert('sửa tài khoản thất bại !');}, 500)</script>";
            } else {
                $res = "<script>setTimeout(function() {alert('sửa tài khoản thành công !');}, 500)</script>";
            }     
        } else {

            ['insertTK' => $func] = require '../entities/taikhoan.php'; 
            $accountCreate = $func($conn,array($IdTK,$USERNAME,$PASSWORD,$MaQuyen,$TrangThai));
             if(!$accountCreate) {
                 $res = "<script>setTimeout(function() {alert('thêm tài khoản thất bại !');}, 500)</script>";
             } else {
                 $res = "<script>document.getElementById('form-edit-noti-humman').style.display='none'; setTimeout(function() {alert('thêm tài khoản thành công !');}, 500)</script>";
             }
        }
    }
    require_once('../utils/close_db.php');
    echo $res;
?>