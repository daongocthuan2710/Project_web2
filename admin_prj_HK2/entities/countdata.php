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
        //thong ke bang du lieu theo thang
        'countMonth12' => function($conn) {
            $query ="SELECT COUNT(*) FROM hoadon WHERE NgayMua BETWEEN '2021-01-01' AND '2021-02-29'";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
        'countMonth34' => function($conn) {
            $query ="SELECT COUNT(*) FROM hoadon WHERE NgayMua BETWEEN '2021-03-01' AND '2021-04-30'";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
        'countMonth56' => function($conn) {
            $query ="SELECT COUNT(*) FROM hoadon WHERE NgayMua BETWEEN '2021-05-01' AND '2021-06-30'";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
        'countMonth79' => function($conn) {
            $query ="SELECT COUNT(*) FROM hoadon WHERE NgayMua BETWEEN '2021-07-01' AND '2021-09-30'";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
        'countMonth1012' => function($conn) {
            $query ="SELECT COUNT(*) FROM hoadon WHERE NgayMua BETWEEN '2021-10-01' AND '2021-12-31'";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_array();
            return intval($result[0]);
        },
    ];
