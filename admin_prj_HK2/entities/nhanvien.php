<?php
    return [
        'findAllAdmin' => function($conn) {
            $query ="SELECT * FROM nhanvien";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'SearchManager' => function($conn,$name) {
            $query = "SELECT * FROM nhanvien AS nv WHERE (nv.TenNV LIKE '%".$name."%')";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'findNVById' => function($conn,$idnv) {
            $query ="SELECT * FROM nhanvien WHERE IdNV = '".$idnv."'";
            $result = mysqli_query($conn,$query);
            $data = array();
            if ($result) {
                while($row = mysqli_fetch_array($result)){
                    $data[] = $row;
                }
            }
            return $data[0];
        },
        'updateNV' => function($conn,$nv,$id) {
            $query ="UPDATE nhanvien SET TenNV = '".$nv[0]."', Ho_Dem_NV = '".$nv[1]."', SDT= '".$nv[2]."', email = '".$nv[3]."', DiaChi = '".$nv[4]."' WHERE IdNV = '".$id."' ";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'insertNV' => function($conn,$nv) {
            $query ="INSERT INTO nhanvien (TenNV,Ho_Dem_NV,SDT,email,DiaChi) VALUES ('".$nv[0]."','"
            .$nv[1]."','".$nv[2]."','".$nv[3]."','".$nv[4]."')";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'deleteNV' => function($conn,$idnv) {
            $query =" DELETE FROM nhanvien WHERE IdNV = '".$idnv."' ";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
    ];

