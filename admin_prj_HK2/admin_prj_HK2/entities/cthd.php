<?php
    return [
        'findAllCTHD' => function($conn) {
            $query ="SELECT * FROM cthoadon as ct inner join sach as s on ct.IdSach = s.IdSach ";
            // INNER JOIN kho AS k ON k.IdSach = s.IdSach
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
      
    ];

