<?php
    return [
        'FindAllBill' => function($conn) {
            $query ="SELECT * FROM hoadon AS hd INNER JOIN khachhang as kh  ON hd.IdKH = kh.IdKH INNER JOIN nhanvien AS nv ON hd.IdNV = nv.IdNV ";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'SearchBill' => function($conn,$name) {
            $query = "SELECT * FROM hoadon AS hd INNER JOIN khachhang AS kh ON hd.IdKH = kh.IdKH INNER JOIN nhanvien AS nv ON nv.IdNV = hd.IdNV  WHERE kh.TenKH LIKE '%".$name."%'";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
    ];