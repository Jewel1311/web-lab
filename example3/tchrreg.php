<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];

        $q = "INSERT INTO `teacher`(`name`, `uname`, `gender`, `password`) VALUES ('$name','$uname','$gender','$pass')";
        $res = mysqli_query($conn,$q);
        if(!$res){
            echo "NOt inserted";
        }
        else{
            header("Location:login.php");
        }

    }
?>