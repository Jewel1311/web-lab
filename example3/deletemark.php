<?php
    include 'connection.php';
    $roll = $_GET['rollno'];
    $q = "delete from marks where rollno='$roll'";
    $res = mysqli_query($conn, $q);
    if(!$res){
        echo "Not deleted";
    }
    else{
        echo "deleted";
    }
?>