<?php
    $inputSearch = $_POST['txtSearchAccount'];
    $MaQuyen = $_POST['MaQuyen'];
    // $typeSearch = $_POST['typeId'];
    require_once('../utils/connect_db.php');
    ['SearchAccount' => $array] = require '../entities/taikhoan.php';
    $data = $array($conn,$inputSearch,$MaQuyen);
    require_once('../utils/close_db.php');
    $res = "";
            $res1 = "";
            $res2 = "";
            $res3 = "";
            //print_r($data);
            for ($i=0; $i <count($data) ; $i++) { 
                if($data[$i]['MaQuyen'] == 'Q1' && $data[$i]['TrangThai'] == '1'){
                        $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                        <div class=\"information-col\">
                        <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                        <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                        <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                        <p class=\"quyen-manager\">quyền: admin</p>
                        <p class=\"trang-thai-manager\">Trạng Thái: On </p></div></div> ";
                        $res = $res . $temp;
                        
                        }
                        else if ($data[$i]['MaQuyen'] == 'Q2' && $data[$i]['TrangThai'] == '1'){
                                $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                        <div class=\"information-col\">
                        <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                        <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                        <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                        <p class=\"quyen-manager\">quyền: Quản lý</p>
                        <p class=\"trang-thai-manager\">Trạng Thái: On</p></div></div> ";
                        $res1 = $res1 . $temp;
                        }
                        else if ($data[$i]['MaQuyen'] == 'Q3' && $data[$i]['TrangThai'] == '1'){
                                $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                        <div class=\"information-col\">
                        <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                        <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                        <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                        <p class=\"quyen-manager\">quyền: Nhân viên</p>
                        <p class=\"trang-thai-manager\">Trạng Thái: On</p></div></div> ";
                        $res2 = $res2 . $temp;
                        }
                        else if ($data[$i]['MaQuyen'] == NULL && $data[$i]['TrangThai'] == '1'){
                                $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                                <div class=\"information-col\">
                                <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                                <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                                <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                                <p class=\"quyen-manager\">quyền: khách hàng</p>
                                <p class=\"trang-thai-manager\">Trạng Thái: On</p></div></div> ";
                                $res2 = $res2 . $temp;
                        }
                        else if($data[$i]['MaQuyen'] == 'Q1' && $data[$i]['TrangThai'] == '0'){
                                $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                        <div class=\"information-col\">
                        <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                        <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                        <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                        <p class=\"quyen-manager\">quyền: admin</p>
                        <p class=\"trang-thai-manager\">Trạng Thái: Off </p></div></div> ";
                        $res = $res . $temp;
                        
                        }
                        else if ($data[$i]['MaQuyen'] == 'Q2' && $data[$i]['TrangThai'] == '0'){
                                $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a  onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                        <div class=\"information-col\">
                        <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                        <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                        <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                        <p class=\"quyen-manager\">quyền: Quản lý</p>
                        <p class=\"trang-thai-manager\">Trạng Thái: Off</p></div></div> ";
                        $res1 = $res1 . $temp;
                        }
                        else if ($data[$i]['MaQuyen'] == 'Q3' && $data[$i]['TrangThai'] == '0'){
                                $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                        <div class=\"information-col\">
                        <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                        <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                        <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                        <p class=\"quyen-manager\">quyền: Nhân viên</p>
                        <p class=\"trang-thai-manager\">Trạng Thái: Off</p></div></div> ";
                        $res2 = $res2 . $temp;
                        }
                        else if ($data[$i]['MaQuyen'] == NULL && $data[$i]['TrangThai'] == '0'){
                                $temp = "<div class=\"col\"> <a onclick=\"deleteAcc('".$data[$i]['IdTK']."')\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a onclick=\"EditAcc('".$data[$i]['IdTK']."')\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                                <div class=\"information-col\">
                                <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                                <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                                <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                                <p class=\"quyen-manager\">quyền: khách hàng</p>
                                <p class=\"trang-thai-manager\">Trạng Thái: Off</p></div></div> ";
                                $res2 = $res2 . $temp;
                        }
                
                
            }
             echo $res;
             echo $res1;
             echo $res2;
             echo $res3;
        
?>