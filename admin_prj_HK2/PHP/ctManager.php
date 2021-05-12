<?php
    $res = "";
    require_once('../utils/connect_db.php');
    if(isset($_POST["IdCTHD"])){
        $IdCT = $_POST["IdCTHD"];
        $typeActionCT = $_POST["typeActionCTHD"];
        if(strcmp($typeActionCT , "findCT") == 0) {
            ['findCTByIdHD' => $func] = require '../entities/cthoadon.php';
            $ct = $func($conn,$IdCT);
            for ($i=0; $i < count($ct); $i++) { 
                $res = $res . "<div class=\"col\" id=\"col-cthd\"> <div class=\"information-col\"> <p class=\"id-manager\">ID sách :".$ct[$i]['IdSach']."</p> <p class=\"username-manager\">Số lượng :".$ct[$i]['SLBan']."</p> <p class=\"pw-manager\">Đơn giá :".$ct[$i]['DonGia']."</p> <p class=\"quyen-manager\">Ghi chú :'".$ct[$i]['GhiChu']."'</p> </div> </div>";
            }
            $res = $res . "<script>document.getElementById('form-cthd').style.display='block';</script>";
        }
        }
    require_once('../utils/close_db.php');
    echo $res;
?>