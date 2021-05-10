
<div id="account-result">
        <?php
            ['findAllAccount' => $account] = require '../admin_prj_HK2/entities/taikhoan.php';
            $data = $account($conn);
            require_once('../admin_prj_HK2/utils/close_db.php');
            $res = "";
            //print_r($data);
            for ($i=0; $i <count($data) ; $i++) { 
               if($data[$i]['MaQuyen'] != NULL){
                $temp = "<div class=\"col\"> <a href=\"#\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a href=\"#\" class=\"edit\"><i class=\"fas fa-edit\"></i></a>
                <div class=\"information-col\">
                <p class=\"id-manager\">ID: ".$data[$i]['IdTK']."</p>
                <p class=\"username-manager\">tên TK: ".$data[$i]['USERNAME']."</p>
                <p class=\"pw-manager\">password: ".$data[$i]['PASSWORD']."d</p>
                <p class=\"quyen-manager\">quyền: ".$data[$i]['TenQuyen']."</p>
                <p class=\"trang-thai-manager\">Trạng Thái: ".$data[$i]['TrangThai']."</p></div></div> ";
                
                $res = $res . $temp;
               }
            }
             echo $res;
        ?>
</div>

