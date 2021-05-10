
<a class="edit" onclick="addBook()"><div class="add-prod"><p>thêm tại đây</p></div></a>
<div id="products-result">
    <?php
        ['findAllbooks' => $books] = require '../admin_prj_HK2/entities/sach.php';

        $data = $books($conn);
        $res = "";
        // print_r($data);
        for ($i=0; $i <count($data) ; $i++) { 
            $temp = "<div class=\"col\"> <a class=\"delete\" onclick=\"deleteBook(".$data[$i]['IdSach'].")\"><i class=\"fas fa-trash-alt\"></i></a> <a class=\"edit\" onclick=\"EditBook(".$data[$i]['IdSach'].")\"><i class=\"fas fa-edit\"></i></a> <img class=\"img-product\" src=\"".$data[$i]['HinhAnh']."\" alt=\"\"> 
            <p class=\"id-product\"> ID: ".$data[$i]['IdSach']."</p> 
            <p class=\"name-product\"> Tên: ".$data[$i]['TenSach']."</p> 
            <p class=\"price-product\">Giá: ".$data[$i]['DonGia']."d</p> 
            <p class=\"author-of-product\">Tác giả: ".$data[$i]['TenTacGia']."</p> 
            
            <p class=\"SL\">SL : 1</p>
            <p class=\"ngayxb\">ngày XB: ".$data[$i]['NgayXB']."</p> 
            <p class=\"theloai\">Thể loại: ".$data[$i]['TenTheLoai']."</p> 
            <p class=\"tennxb\"> NXb: ".$data[$i]['TenNXB']."</p> </div> ";

            if($i % 4 ==0 && $i != 0){
                $temp = "<div class=\"row1\">".$temp."</div>";
            }
            $res = $res . $temp;
        }
        echo $res;
    ?>

</div>
        
