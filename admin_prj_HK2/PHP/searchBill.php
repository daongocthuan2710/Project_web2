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
        if($data[$i]['TrangThai'] == '0'){
            $temp = "<div style=\" border:solid 3px #ff7575 \" class=\"col\" id=\"".$data[$i]['IdHoaDon']."\" > <a id=\"set-bill\"  class=\"delete\" onclick=\"showCTHD('".$data[$i]['IdHoaDon']."')\"><i class=\"fas fa-info-circle\"></i></a> <a  class=\"delete\" onclick=\"setBill('".$data[$i]['IdHoaDon']."',".$data[$i]['TrangThai'].")\"><i class=\"fas fa-check-double\"></i></a>    
            <div class=\"information-col\">
            <p class=\"id-bill\">ID: ".$data[$i]['IdHoaDon']."</p>
            <p class=\"name-customer\">Tên KH: ".$data[$i]['TenKH']."</p>
            <p class=\"name-manager\">Tên NV: ".$data[$i]['TenNV']."</p>
            <p class=\"name-ctkm\">CTKM: ".$data[$i]['IdCTKM']."</p>
            <p class=\"sum-monney\">Tổng tiền: ".$data[$i]['TongTien']."</p>;
            <p class=\"day-buy\">Ngày: ".$data[$i]['NgayMua']."</p></div></div> ";
            }
            else if($data[$i]['TrangThai'] == '1'){
             $temp = "<div style=\" border:solid 3px #C6F7FE \" class=\"col\" id=\"".$data[$i]['IdHoaDon']."\" > <a id=\"set-bill\"  class=\"delete\" onclick=\"showCTHD('".$data[$i]['IdHoaDon']."')\"><i class=\"fas fa-info-circle\"></i></a> <a  class=\"delete\" onclick=\"setBill('".$data[$i]['IdHoaDon']."',".$data[$i]['TrangThai'].")\"><i class=\"fas fa-check-double\"></i></a>    
                <div class=\"information-col\">
                <p class=\"id-bill\">ID: ".$data[$i]['IdHoaDon']."</p>
                <p class=\"name-customer\">Tên KH: ".$data[$i]['TenKH']."</p>
                <p class=\"name-manager\">Tên NV: ".$data[$i]['TenNV']."</p>
                <p class=\"name-ctkm\">CTKM: ".$data[$i]['IdCTKM']."</p>
                <p class=\"sum-monney\">Tổng tiền: ".$data[$i]['TongTien']."</p>;
                <p class=\"day-buy\">Ngày: ".$data[$i]['NgayMua']."</p></div></div> ";
                }
            $res = $res . $temp;
    }
    echo $res;
?>