<?php session_start();

include('connect.php');

if(isset($_POST['login']));
{
    $user_unsafe=$_POST['username'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($conn,$user_unsafe);
    $pass = mysqli_real_escape_string($conn,$pass_unsafe);

    $query=mysqli_query($conn, "SELECT * FROM `taikhoan` WHERE USERNAME = '$user'
    and PASSWORD = '$pass'") or die(mysqli_error($conn));

    $row = mysqli_fetch_array($query);

        $name=$row['USERNAME'];
        $counter=mysqli_num_rows($query);
        $idTK=$row['idTK'];

        if ($counter == 0)
        {
            echo "<script type = 'text/javascript'>alert('Invalid Username or Password!');
            document.location='login_logout.php'</script>";
        }
        else 
        {
            $_SESSION['idTK'] = $idTK;
            $_SESSION['USERNAME'] = $name;
            echo "<script type = 'text/javascript'>document.location='../index.php'</script>";
        }
}

?>