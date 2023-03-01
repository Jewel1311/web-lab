<?php
    session_start();
    include 'connection.php';
    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];


        $q = "select * from teacher where uname='$uname' and password='$pass'";
        $res = mysqli_query($conn, $q);
        
        if(mysqli_num_rows($res) > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }
        else{
            echo "invalid credentials";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login page</h1>
    <form action="" method="POST">
        <input type="text" name="uname" placeholder="uname" required><br>
        <input type="password" name="pass" placeholder="password" required><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>