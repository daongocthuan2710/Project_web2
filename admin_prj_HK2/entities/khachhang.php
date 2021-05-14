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

        'findKHById' => function($conn,$idkh) {
            $query ="SELECT * FROM khachhang WHERE IdKH = '".$idkh."'";
            $result = mysqli_query($conn,$query);
            $data = array();
            if ($result) {
                while($row = mysqli_fetch_array($result)){
                    $data[] = $row;
                }
            }
            return $data[0];
        },
        'updateKH' => function($conn,$kh,$id) {
            $query ="UPDATE khachhang SET TenKH = '".$kh[0]."', Ho_Dem_KH = '".$kh[1]."', SDT= '".$kh[2]."', email = '".$kh[3]."', DiaChi = '".$kh[4]."' WHERE IdKH = '".$id."' ";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'insertKH' => function($conn,$kh) {
            $query ="INSERT INTO khachhang (TenKH,Ho_Dem_KH,SDT,email,DiaChi) VALUES ('".$kh[0]."','"
            .$kh[1]."','".$kh[2]."','".$kh[3]."','".$kh[4]."')";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'deleteKH' => function($conn,$idkh) {
            $query =" DELETE FROM khachhang WHERE IdKH = '".$idkh."' ";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
    ];

