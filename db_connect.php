<?php
    $host="localhost";
    $username="daothuan2710";
    $password="daothuan2710";
    $database="bookstore";
    $conn=mysqli_connect($host,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");
    if (mysqli_connect_error())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    { echo "Success to connect to MySQL <br>"; }



    $sql = "SELECT book_code, book_title, genre_code, quantity FROM Book";
    // $result = $conn->query($sql);
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
        // output dữ liệu trên trang
        while($row = mysqli_fetch_assoc($result)) {
            echo "book_code: " . $row["book_code"]. "   genre_code: " . $row["genre_code"]. "   book-title: "
                . $row["book_title"]."   quantity: ".$row["quantity"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    
    mysqli_close($conn);
?>