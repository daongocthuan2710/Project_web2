<?php
    $inputSearch = $_POST['txtSearchBill'];
    // $typeSearch = $_POST['typeId'];
    require_once('../utils/connect_db.php');
    ['SearchBill' => $array] = require '../entities/donhang.php';
    $data = $array($conn,$inputSearch);
    require_once('../utils/close_db.php');
    $res = "";
    // print_r($data);
    for ($i=0; $i <count($data) ; $i++) { 
        $temp = "<div class=\"col\"> <a  class=\"delete\" onclick=\"document.getElementById('form-accept-delete-product').style.display='block'\"><i class=\"fas fa-trash-alt\"></i></a> <a class=\"edit\" onclick=\"document.getElementById('form-signin').style.display='block'\"><i class=\"fas fa-edit\"></i></a>
                <div class=\"information-col\">
                <p class=\"id-bill\">ID: ".$data[$i]['IdHoaDon']."</p>
                <p class=\"name-customer\">Tên KH: ".$data[$i]['TenKH']."</p>
                <p class=\"name-manager\">Tên NV: ".$data[$i]['TenNV']."</p>
                <p class=\"name-ctkm\">CTKM: ".$data[$i]['IdCTKM']."</p>
                <p class=\"sum-monney\">Tổng tiền: ".$data[$i]['TongTien']."</p>;
                <p class=\"day-buy\">Ngày: ".$data[$i]['NgayMua']."</p></div></div> ";
        $res = $res . $temp;
    }
    echo $res;
?>