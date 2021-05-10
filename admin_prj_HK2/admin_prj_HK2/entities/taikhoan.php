<?php
    return [
        'findAllAccount' => function($conn) {
            $query ="SELECT * FROM taikhoan  AS tk INNER JOIN quyen AS q ON tk.MaQuyen = q.MaQuyen ";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'SearchAccount' => function($conn,$name,$MaQuyen) {
            $condition1 = " = ";
            if (empty($MaQuyen)) {
                $condition1 = " <> ";
                $MaQuyen = 0;
            }
            $query = "SELECT * FROM taikhoan AS tk INNER JOIN quyen AS q ON tk.MaQuyen = q.MaQuyen WHERE tk.MaQuyen".$condition1."'".$MaQuyen. "' AND tk.USERNAME LIKE '%".$name."%'"; 
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
    ];

