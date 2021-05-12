<?php
    return [
        'findAllQuyen' => function($conn) {
            $query ="SELECT * FROM quyen";
            // INNER JOIN kho AS k ON k.IdSach = s.IdSach
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
      
    ];

