<?php
    return [
        'findAllCustomers' => function($conn) {
            $query ="SELECT * FROM khachhang";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'SearchCustomer' => function($conn,$name) {
            $query = "SELECT * FROM khachhang AS kh WHERE (kh.TenKH LIKE '%".$name."%')";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
    ];

