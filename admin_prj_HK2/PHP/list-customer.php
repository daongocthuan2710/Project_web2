<!-- <?php //include '../admin_prj_HK2/PHP/EDIT-FORM.php';?>
<div id="form-accept-delete-product" class="form-acpt-dlt-prct">
<form class="ctn-form-acpt-dlt-prct animate-form-accept-delete-product" action="/action_page.php" method="post">
    <h3>chắc chắn xóa?</h3>
<button type="button" onclick="document.getElementById('form-accept-delete-product').style.display='none'"class="cancelbtn-dlt-ele-prct ">Cancel</button>
<button type="button" onclick="document.getElementById('form-accept-delete-product').style.display='none'" class="cancelbtn-dlt-ele-prct ">delete</button>
</form>
</div>
<div class="col-customer" style="float: left;">
<a  class="delete" onclick="document.getElementById('form-accept-delete-product').style.display='block'"><i class="fas fa-trash-alt"></i></a>
<a class="edit" onclick="document.getElementById('form-signin').style.display='block'"><i class="fas fa-edit"></i></a>
<div class="avt-customer"><img src="../admin_prj_HK2/img/logo-dang.jpg" alt=""></div>
<p class="name-customer">tran minh thuc</p>
<p class="pnum-customer">0123456789</p>
<p class="address">28A lang tang</p>
</div> -->
<div class="div-btn-add"><a class="edit" onclick="addCus()"><div class="add-prod"><p>thêm tại đây</p></div></a></div>
<div id="customer-result">
            
        <?php
            ['findAllCustomers' => $khachhang] = require '../admin_prj_HK2/entities/khachhang.php';
            $data = $khachhang($conn);
            $res = "";
            //print_r($data);
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
</div>

