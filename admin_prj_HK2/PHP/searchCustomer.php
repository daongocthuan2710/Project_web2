<?php
    $inputSearch = $_POST['txtSearchCustomer'];
    // $typeSearch = $_POST['typeId'];
    require_once('../utils/connect_db.php');
    ['SearchCustomer' => $array] = require '../entities/khachhang.php';
    $data = $array($conn,$inputSearch);
    require_once('../utils/close_db.php');
    $res = "";
    // print_r($data);
    for ($i=0; $i <count($data) ; $i++) { 
        $temp = "<div class=\"col\"> <a  class=\"delete\" onclick=\"deleteCus('".$data[$i]['IdKH']."')\"><i class=\"fas fa-trash-alt\"></i></a> <a class=\"edit\" onclick=\"EditCus('".$data[$i]['IdKH']."')\"><i class=\"fas fa-edit\"></i></a>
        <div class=\"information-col\">
        <p class=\"id-customer\">ID: ".$data[$i]['IdKH']."</p>
        <p class=\"username-customer\">Tên: ".$data[$i]['TenKH']."".$data[$i]['Ho_Dem_KH']."</p>
        <p class=\"pw-customer\">SDT: ".$data[$i]['SDT']."</p>
        <p class=\"quyen-customer\">Email: ".$data[$i]['email']."</p>
        <p class=\"trang-thai-customer\">Địa chỉ: ".$data[$i]['DiaChi']."</p></div></div> ";
        $res = $res . $temp;
    }
    echo $res;
?>