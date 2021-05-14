<?php
    $res = "";
    require_once('../utils/connect_db.php');
    if(isset($_POST["IdCus"])){
        $IdCus = $_POST["IdCus"];
        $typeActionCus = $_POST["typeActionCus"];
        if(strcmp($typeActionCus , "findCus") == 0) {
            $selectType = "";
            ['findKHById' => $func] = require '../entities/khachhang.php';
            $kh = $func($conn,$IdCus);
            $res = $res . "<script>document.getElementById('IdKH').value='".$kh['IdKH']."';document.getElementById('TenKH').value='".$kh['TenKH']."';
            document.getElementById('HoDemKH').value='".$kh['Ho_Dem_KH']."';document.getElementById('SDTKH').value='".$kh['SDT']."';
            document.getElementById('EmailKH').value='".$kh['email']."';document.getElementById('DiaChiKH').value='".$kh['DiaChi']."';document.getElementById('form-edit-noti-cus').style.display='block';</script>";
        }
        if(strcmp($typeActionCus , "delete") == 0) {
            ['deleteKH' => $check] = require '../entities/khachhang.php';
            $flag = $check($conn,$IdCus);
            if(!$flag) {
                $res = $res."<script>alert('xóa thất bại');</script>";
            } else {
                $res = $res."<script>alert('xóa thành công');</script>";
            }}
        }

    if(isset($_POST['IdKH'])){

        $id = $_POST["IdKH"];
        $ten = $_POST["TenKH"];
        $hodem = $_POST["HoDemKH"];
        $sdt = $_POST["SDTKH"];
        $email = $_POST["EmailKH"];
        $diachi = $_POST["DiaChiKH"];

        if(!empty($id)) {
            ['updateKH' => $func] = require '../entities/khachhang.php';
             $customerUpdate = $func($conn,array($ten,$hodem,$sdt,$email,$diachi),$id);
            if(!$customerUpdate) {
                $res = "<script>setTimeout(function() {alert('sửa thông tin khách hàng thất bại !');}, 500)</script>";
            } else {
                $res = "<script>setTimeout(function() {alert('sửa thông tin khách hàng thành công !');}, 500)</script>";
            }     
        } else {
            
            ['insertKH' => $func] = require '../entities/khachhang.php'; 
            $customerCreate = $func($conn,array($ten,$hodem,$sdt,$email,$diachi));
             if(!$customerCreate) {
                 $res = "<script>setTimeout(function() {alert('thêm khách hàng thất bại !');}, 500)</script>";
             } else {
                 $res = "<script>document.getElementById('form-edit-noti-cus').style.display='none'; setTimeout(function() {alert('thêm khách hàng thành công !');}, 500)</script>";
             }
        }
    }
    require_once('../utils/close_db.php');
    echo $res;
?>