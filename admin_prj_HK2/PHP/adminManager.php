<?php
    $res = "";
    require_once('../utils/connect_db.php');
    if(isset($_POST["IdMng"])){
        $IdMng = $_POST["IdMng"];
        $typeActionMng = $_POST["typeActionMng"];
        if(strcmp($typeActionMng , "findMng") == 0) {
            $selectType = "";
            ['findNVById' => $func] = require '../entities/nhanvien.php';
            $nv = $func($conn,$IdMng);
            $res = $res . "<script>document.getElementById('IdNV').value='".$nv['IdNV']."';document.getElementById('TenNV').value='".$nv['TenNV']."';
            document.getElementById('HoDemNV').value='".$nv['Ho_Dem_NV']."';document.getElementById('SDTNV').value='".$nv['SDT']."';
            document.getElementById('EmailNV').value='".$nv['email']."';document.getElementById('DiaChiNV').value='".$nv['DiaChi']."';document.getElementById('form-edit-noti-humman').style.display='block';</script>";
        }
        if(strcmp($typeActionMng , "delete") == 0) {
            ['deleteNV' => $check] = require '../entities/nhanvien.php';
            $flag = $check($conn,$IdMng);
            if(!$flag) {
                $res = $res."<script>alert('xóa thất bại');</script>";
            } else {
                $res = $res."<script>alert('xóa thành công');</script>";
            }}
        }

    if(isset($_POST['IdNV'])){

        $id = $_POST["IdNV"];
        $ten = $_POST["TenNV"];
        $hodem = $_POST["HoDemNV"];
        $sdt = $_POST["SDTNV"];
        $email = $_POST["EmailNV"];
        $diachi = $_POST["DiaChiNV"];

        if(!empty($id)) {
            ['updateNV' => $func] = require '../entities/nhanvien.php';
            $customerUpdate = $func($conn,array($ten,$hodem,$sdt,$email,$diachi),$id);
            if(!$customerUpdate) {
                $res = "<script>setTimeout(function() {alert('sửa thông tin nhân viên thất bại !');}, 500)</script>";
            } else {
                $res = "<script>setTimeout(function() {alert('sửa thông tin nhân viên thành công !');}, 500)</script>";
            }     
        } else {
            
            ['insertNV' => $func] = require '../entities/nhanvien.php'; 
            $customerCreate = $func($conn,array($ten,$hodem,$sdt,$email,$diachi));
             if(!$customerCreate) {
                 $res = "<script>setTimeout(function() {alert('thêm nhân viên thất bại !');}, 500)</script>";
             } else {
                 $res = "<script>document.getElementById('form-edit-noti-humman').style.display='none'; setTimeout(function() {alert('thêm nhân viên thành công !');}, 500)</script>";
             }
        }
    }
    require_once('../utils/close_db.php');
    echo $res;
?>