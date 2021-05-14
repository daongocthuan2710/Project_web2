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

        'findDHById' => function($conn,$idhd,$status) {
            $query ="SELECT * FROM hoadon WHERE IdHoaDon = '".$idhd."'";
            $result = mysqli_query($conn,$query);
            $data = array();
            if ($result) {
                while($row = mysqli_fetch_array($result)){
                    $data[] = $row;
                }
            }
            return $data[0];
        },
        'updateDH' => function($conn,$status,$id) {
            $query ="UPDATE hoadon SET TrangThai = ".$status." WHERE IdHoaDon = '".$id."' ";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
    ];