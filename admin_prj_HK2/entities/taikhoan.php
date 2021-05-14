<?php
    return [
        'findAllAccount' => function($conn) {
            $query ="SELECT * FROM taikhoan  ";
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
        
        'findTKById' => function($conn,$idTK) {
            $query ="SELECT * FROM taikhoan WHERE IdTK = '".$idTK."'";
            $result = mysqli_query($conn,$query);
            $data = array();
            if ($result) {
                while($row = mysqli_fetch_array($result)){
                    $data[] = $row;
                }
            }
            return $data[0];
        },
        'updateTK' => function($conn,$TK,$id) {
            $query ="UPDATE taikhoan SET  USERNAME = '".$TK[0]."', PASSWORD = '".$TK[1]."', MaQuyen  = '".$TK[2]."', TrangThai = ".$TK[3]." WHERE IdTK = '".$id."' ";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'insertTK' => function($conn,$TK) {
            $query ="INSERT INTO taikhoan (IdTK,USERNAME,PASSWORD,MaQuyen,TrangThai) VALUES ('".$TK[4]."','"
            .$TK[0]."','".$TK[1]."','".$TK[2]."',".$TK[3].")";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
        'deleteTK' => function($conn,$idTK) {
            $query =" DELETE FROM taikhoan WHERE IdTK = '".$idTK."' ";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                return false;
            }
            return true;
        },
    ];

