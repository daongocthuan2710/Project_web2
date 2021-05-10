<?php
['findAllAccount' => $account] = require '../entities/taikhoan.php';
$data = $account();
$res = "";
print_r($data);
for ($i=0; $i <count($data) ; $i++) { 
    $temp = "<div class=\"col\"> <a href=\"#\" class=\"delete\"><i class=\"fas fa-trash-alt\"></i></a> <a href=\"#\" class=\"edit\"><i class=\"fas fa-edit\"></i></a> <img class=\"img-product\" src=\"../admin_prj_HK2/img/mkns.jpg\" alt=\"\"> <p class=\"name-product\">"
    .$data[$i]['TenSach']."</p> <p class=\"price-product\">price: "
    .$data[$i]['DonGia']."d</p> <p class=\"author-of-product\">tac gia: "
    .$data[$i]['TenTacGia']."</p> <p class=\"SL\">SL :".$data[$i]['TonKho']."/p> </div> ";
    if($i % 3 ==0){
        $temp = "<div class=\"row1\">".$temp."</div>";
    }
    $res = $res . $temp;
}
 echo $res;
?>