<?php
    $res = "";
    require_once('../utils/connect_db.php');
    $IdCheck = $_POST["IdCheck"];
    $statusBill = $_POST["statusBill"];
    ['updateDH' => $func] = require '../entities/donhang.php';
    $status = $func($conn,$statusBill,$IdCheck);

    $flag = "false";

    if ((int)$IdCheck == 0) {
        $flag = "true";
    }

    if($status) {
        $res = $res . "<script>alert('thay đổi trạng thái thành công !!!!'); document.getElementById('checkbill').checked = ".$flag.";</script>";                
    } else {
        $res = $res . "<script>alert('thay đổi trạng thái thất bại !!!!');</script>";                
    }
    require_once('../utils/close_db.php');
    echo $res;
?>