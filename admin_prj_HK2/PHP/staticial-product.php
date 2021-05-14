
<div class="div-btn-add"><a class="edit" onclick="addBook()"><div class="add-prod"><p>thêm tại đây</p></div></a></div>
<div id="products-result">
    <?php
        ['findAllbooks' => $books] = require '../admin_prj_HK2/entities/sach.php';
        ['countManager' => $count1] = require '../admin_prj_HK2/entities/countdata.php';
        $number1 = $count1($conn);
        ['countCustomer' => $count2] = require '../admin_prj_HK2/entities/countdata.php';
        $number2 = $count2($conn);
        ['countBill' => $count3] = require '../admin_prj_HK2/entities/countdata.php';
        $number3 = $count3($conn);
        ['countProduct' => $count4] = require '../admin_prj_HK2/entities/countdata.php';
        $number4 = $count4($conn);

        //dem so luong bill trong thang
        ['countMonth12' => $countMonth12] = require '../admin_prj_HK2/entities/countdata.php';
        $month12 = $countMonth12($conn);
        ['countMonth34' => $countMonth34] = require '../admin_prj_HK2/entities/countdata.php';
        $month34 = $countMonth34($conn);
        ['countMonth56' => $countMonth56] = require '../admin_prj_HK2/entities/countdata.php';
        $month56 = $countMonth56($conn);
        ['countMonth79' => $countMonth79] = require '../admin_prj_HK2/entities/countdata.php';
        $month79 = $countMonth79($conn);
        ['countMonth1012' => $countMonth1012] = require '../admin_prj_HK2/entities/countdata.php';
        $month1012 = $countMonth1012($conn);
        $data = $books($conn);
        $res = "";
        // print_r($data);
        for ($i=0; $i <count($data) ; $i++) { 
            $temp = "<div class=\"col\"> <a class=\"delete\" onclick=\"deleteBook(".$data[$i]['IdSach'].")\"><i class=\"fas fa-trash-alt\"></i></a> <a class=\"edit\" onclick=\"EditBook(".$data[$i]['IdSach'].")\"><i class=\"fas fa-edit\"></i></a> <img class=\"img-product\" src=\"".$data[$i]['HinhAnh']."\" alt=\"\"> 
            <p class=\"id-product\"> ID: ".$data[$i]['IdSach']."</p> 
            <p class=\"name-product\"> Tên: ".$data[$i]['TenSach']."</p> 
            <p class=\"price-product\">Giá: ".$data[$i]['DonGia']."d</p> 
            <p class=\"author-of-product\">Tác giả: ".$data[$i]['TenTacGia']."</p> 
            
            <p class=\"SL\">SL : ".$data[$i]['TonKho']."</p>
            <p class=\"ngayxb\">ngày XB: ".$data[$i]['NgayXB']."</p> 
            <p class=\"theloai\">Thể loại: ".$data[$i]['TenTheLoai']."</p> 
            <p class=\"tennxb\"> NXb: ".$data[$i]['TenNXB']."</p> </div> ";

            if($i % 4 ==0 && $i != 0){
                $temp = "<div class=\"row1\">".$temp."</div>";
            }
            $res = $res . $temp;
        }
        $res = $res . "<script>
        document.getElementById('num1').value = '".$number1."';
        document.getElementById('num2').value = '".$number2."';
        document.getElementById('num3').value = '".$number3."';
        document.getElementById('num4').value = '".$number4."';
        document.getElementById('m12').value = '".$month12."';
        document.getElementById('m34').value = '".$month34."';
        document.getElementById('m56').value = '".$month56."';
        document.getElementById('m79').value = '".$month79."';
        document.getElementById('m1012').value = '".$month1012."';</script>";
        echo $res;
    ?>
</div>
        
