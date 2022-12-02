<?php
    session_start();
    require 'connection.php';
    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $ktuid = $_POST['ktu_id'];
        $result = mysqli_query($conn, "SELECT * FROM student WHERE username='$uname' and ktu_id = '$ktuid'");
        if (mysqli_num_rows($result) > 0){
            $_SESSION['user'] = $uname;
            header("Location: home.php");
        }
        else{
            echo "Invalid Credentials";
        }
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            height:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .frm{
            display:flex;
            flex-direction:column;
        }
    </style>
</head>
<body>
        <form action="" method = "POST" class="frm">
            <h3>Login</h3>
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="ktu_id" placeholder="ktu id">
            <input type="submit" value="Submit" name='submit'>
        </form>
</body>
</html>