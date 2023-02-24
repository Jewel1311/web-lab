<?php
    session_start();
    include 'connection.php';

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $query = "Select * from signin where uname='$uname' and pass = '$pass'";
    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0){
        $_SESSION['user'] = $uname;
        header('Location:details.php');
    }
    else{
        echo "<script>alert('Invalid credentials')</script>";
    }
?>