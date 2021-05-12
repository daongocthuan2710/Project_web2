<?php
    return [
        'findAllCTHD' => function($conn) {
            $query ="SELECT * FROM cthoadon";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'findCTByIdHD' => function($conn,$idHD) {
            $query ="SELECT * FROM cthoadon  as ct where ct.IdHoaDon = '".$idHD."'";
            $result = mysqli_query($conn,$query);
            $data = array();
            if ($result) {
                while($row = mysqli_fetch_array($result)){
                    $data[] = $row;
                }
            }
            return $data;
        },
    ];
?>
