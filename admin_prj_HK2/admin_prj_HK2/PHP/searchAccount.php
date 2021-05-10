<?php
    $inputSearch = $_POST['txtSearchAccount'];
    $MaQuyen = $_POST['MaQuyen'];
    // $typeSearch = $_POST['typeId'];
    require_once('../utils/connect_db.php');
    ['SearchAccount' => $array] = require '../entities/taikhoan.php';
    $data = $array($conn,$inputSearch,$MaQuyen);
    require_once('../utils/close_db.php');
    $res = "";
    // print_r($data);
    for ($i=0; $i <count($data) ; $i++) { 
        $temp = "<div class=\"col\"> <a href=\"#\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a href=\"#\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
        <div class=\"information-col\">
        <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
        <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
        <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
        <p class=\"quyen-manager\">quyền: ".$data[$i]['TenQuyen']."</p>
        <p class=\"trang-thai-manager\">Trạng Thái: ".$data[$i]['TrangThai']."</p></div></div> ";
        $res = $res . $temp;
    }
    echo $res;
?>