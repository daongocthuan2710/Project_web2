<?php
    return [
        'countManager' => function($conn) {
            $query ="SELECT COUNT(*) FROM nhanvien";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
        'countCustomer' => function($conn) {
            $query ="SELECT COUNT(*) FROM khachhang ";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
        'countBill' => function($conn) {
            $query ="SELECT COUNT(*) FROM hoadon";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
        'countProduct' => function($conn) {
            $query ="SELECT COUNT(*) FROM sach";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
    ];
