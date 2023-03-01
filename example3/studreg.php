<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];


        $q = "INSERT INTO `student`(`rollno`, `name`) VALUES ('$rollno','$name')";
        $res = mysqli_query($conn,$q);
        if(!$res){
            echo "Not inserted";
        }
        else{
            echo "Inserted";
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
    <h1>Register Students</h1>
    <form action="" method="POST">
        <input type="text" name="rollno" placeholder="rollno"><br>
        <input type="text" name="name" placeholder="name"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>