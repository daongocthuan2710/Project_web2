<?php
    $inputSearch = $_POST['txtSearchmanager'];
    // $typeSearch = $_POST['typeId'];
    require_once('../utils/connect_db.php');
    ['SearchManager' => $array] = require '../entities/nhanvien.php';
    $data = $array($conn,$inputSearch);
    require_once('../utils/close_db.php');
    $res = "";
    // print_r($data);
    for ($i=0; $i <count($data) ; $i++) { 
        $temp = "<div class=\"col\"> <a  class=\"delete\" onclick=\"deleteMng('".$data[$i]['IdNV']."')\"><i class=\"fas fa-trash-alt\"></i></a> <a class=\"edit\" onclick=\"EditMng('".$data[$i]['IdNV']."')\"><i class=\"fas fa-edit\"></i></a>
        <div class=\"information-col\">
        <p class=\"id-manager\">ID: ".$data[$i]['IdNV']."</p>
        <p class=\"username-manager\">Tên: ".$data[$i]['TenNV']."".$data[$i]['Ho_Dem_NV']."</p>
        <p class=\"pw-manager\">SDT: ".$data[$i]['SDT']."</p>
        <p class=\"quyen-manager\">Email: ".$data[$i]['email']."</p>
        <p class=\"trang-thai-manager\">Địa chỉ: ".$data[$i]['DiaChi']."</p></div></div> ";
        $res = $res . $temp;
    }
    echo $res;
?>