<div class="ctn-fluir">
        
<?php
    require_once('../admin_prj_HK2/utils/connect2_db.php');
    ['countManager' => $count1] = require '../admin_prj_HK2/entities/countdata.php';
    $number1 = $count1($conn);
    ['countCustomer' => $count2] = require '../admin_prj_HK2/entities/countdata.php';
    $number2 = $count2($conn);
    ['countBill' => $count3] = require '../admin_prj_HK2/entities/countdata.php';
    $number3 = $count3($conn);
    ['countProduct' => $count4] = require '../admin_prj_HK2/entities/countdata.php';
    $number4 = $count4($conn);
    require_once('../admin_prj_HK2/utils/close2_db.php');
    echo "<script>window.onload = function () { var i = 0,j=0,k=0,l=0; if (i == 0) { i = 1; var elem1 = document.getElementById(\"load-number-manager\"); var width1 = 0; var id1 = setInterval(frame, 10); function frame() { if (width1 >= ".$number1.") { clearInterval(id1); i = 0; } else { width1++; elem1.innerHTML = width1 ; } } } if (j == 0) { j = 1; var elem2 = document.getElementById(\"load-number-admin\"); var width2 = 0; var id2 = setInterval(frame, 10); function frame() { if (width2 >= ".$number2.") { clearInterval(id2); j = 0; } else { width2++; elem2.innerHTML = width2 ; } } } if (k == 0) { k = 1; var elem3 = document.getElementById(\"load-number-product\"); var width3 = 0; var id3 = setInterval(frame, 10); function frame() { if (width3 >= ".$number3.") { clearInterval(id3); k = 0; } else { width3++; elem3.innerHTML = width3 ; } } } if (l == 0) { l = 1; var elem4 = document.getElementById(\"load-number-sold\"); var width4 = 0; var id4 = setInterval(frame, 10); function frame() { if (width4 >= ".$number4.") { clearInterval(id4); l = 0; } else { width4++; elem4.innerHTML = width4 ; } } }}</script>"

?>

                        <div class="manager-fluir d-flex">
                                <h2 style="color: #16BBE5 !important;" id="load-number-manager" class="thong-ke-so">0</h2>
                                <p class="ten-so-can-thong-ke">nhân viên</p>
                        </div>
                        <div class="admin-fluir d-flex">
                                <h2 style="color:#EA5D5D !important ;" id="load-number-admin" class="thong-ke-so">0</h2>
                                <p class="ten-so-can-thong-ke">khách hàng</p>
                        </div>
                        <div class="product-fluir d-flex" id="1">
                                <h2 style="color: #FCAD73 !important;" id="load-number-product" class="thong-ke-so">0</h2>
                                <p class="ten-so-can-thong-ke">đơn hàng</p>
                        </div>
                        <div class="sold-fluir d-flex">
                                <h2 style="color: #2DAAB8 !important;" id="load-number-sold" class="thong-ke-so">0</h2>
                                <p class="ten-so-can-thong-ke">sản phẩm</p>
                        </div>

                    </div>