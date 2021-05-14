<?php
    return [
        'findAllbooks' => function($conn) {
            $query ="SELECT * FROM sach AS s INNER JOIN tacgia AS tg ON tg.IdTacGia = s.IdTacGia INNER JOIN theloai AS tl ON tl.IdTheLoai = s.IdTheLoai INNER JOIN nxb AS xb ON xb.IdNXB = s.IdNXB" ;
            // INNER JOIN kho AS k ON k.IdSach = s.IdSach
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'findBookById' => function($conn,$idprod) {
            $query ="SELECT * FROM sach WHERE IdSach = ".$idprod;
            $result = mysqli_query($conn,$query);
            $data = array();
            if ($result) {
                while($row = mysqli_fetch_array($result)){
                    $data[] = $row;
                }
            }
            return $data[0];
        },
        'SearchBooks' => function($conn,$name,$IdTacGia,$IdTheLoai) {
            $condition1 = " = ";
            $condition2 = " = ";
            if (empty($IdTheLoai)) {
                $condition1 = " <> ";
                $IdTheLoai = 0;
            }
            if (empty($IdTacGia)) {
                $condition2 = " <> ";
                $IdTacGia = 0;
            }
            $query = "SELECT * FROM sach AS s INNER JOIN tacgia AS tg ON tg.IdTacGia = s.IdTacGia INNER JOIN theloai AS tl ON tl.IdTheLoai = s.IdTheLoai INNER JOIN nxb AS xb ON xb.IdNXB = s.IdNXB WHERE (s.IdTheLoai".$condition1.$IdTheLoai. " AND s.IdTacGia".$condition2.$IdTacGia." AND s.TenSach LIKE '%".$name."%')";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'updateBook' => function($conn,$book,$id) {
            $query ="UPDATE sach SET TenSach = '".$book[0]."', IdTheLoai = ".$book[1].",NoiDung = '".$book[2]."'";
            if(!empty($book[3])) {
                $query = $query . ",HinhAnh = '".$book[3]."'";
            }
            $query = $query . ",NgayXB = '".$book[4]."',IdNXB = ".$book[5].",IdTacGia = ".$book[6].",DonGia = ".$book[7].",TonKho = '".$book[8]."' WHERE IdSach = ".$id;
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'insertBook' => function($conn,$book) {
            $query ="INSERT INTO sach (TenSach,IdTheLoai,NoiDung,HinhAnh,NgayXB,IdNXB,IdTacGia,DonGia,TonKho) VALUES ('".$book[0]."',"
            .$book[1].",'".$book[2]."','".$book[3]."','".$book[4]."',".$book[5].",".$book[6].",".$book[7].",'".$book[8]."')";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'deleteBook' => function($conn,$IdSach) {
            $query ="DELETE FROM sach WHERE IdSach = ".$IdSach;
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
    ];

