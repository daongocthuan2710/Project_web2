<?php
    return [
        'findAllAuthor' => function($conn) {
            $query ="SELECT * FROM tacgia";
            // INNER JOIN kho AS k ON k.IdSach = s.IdSach
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
      
    ];

