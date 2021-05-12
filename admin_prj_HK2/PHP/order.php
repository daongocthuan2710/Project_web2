
<div id="bill-result">
            
        <?php
        
            ['FindAllBill' => $bill] = require '../admin_prj_HK2/entities/donhang.php';
            $data = $bill($conn);
            $res = "";
            //print_r($data);
            for ($i=0; $i <count($data) ; $i++) { 
                $temp = "<div class=\"col\" id=\"".$data[$i]['IdHoaDon']."\" > <a id=\"set-bill\"  class=\"delete\" onclick=\"showCTHD('".$data[$i]['IdHoaDon']."')\"><i class=\"fas fa-info-circle\"></i></a> <a  class=\"delete\" onclick=\"setBill('".$data[$i]['IdHoaDon']."')\"><i class=\"fas fa-check-double\"></i></a>    
                <div class=\"information-col\">
                <p class=\"id-bill\">ID: ".$data[$i]['IdHoaDon']."</p>
                <p class=\"name-customer\">Tên KH: ".$data[$i]['TenKH']."</p>
                <p class=\"name-manager\">Tên NV: ".$data[$i]['TenNV']."</p>
                <p class=\"name-ctkm\">CTKM: ".$data[$i]['IdCTKM']."</p>
                <p class=\"sum-monney\">Tổng tiền: ".$data[$i]['TongTien']."</p>;
                <p class=\"day-buy\">Ngày: ".$data[$i]['NgayMua']."</p></div></div> ";
                
                $res = $res . $temp;
            }
             echo $res;
        ?>
</div>