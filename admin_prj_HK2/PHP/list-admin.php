<div class="div-btn-add"><a class="edit" onclick="addMng()"><div class="add-prod"><p>thêm tại đây</p></div></a></div>
<div id="admin-acc-result">
            
        <?php
            ['findAllAdmin' => $nv] = require '../admin_prj_HK2/entities/nhanvien.php';
            $data = $nv($conn);
            $res = "";
            //print_r($data);
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
</div>

