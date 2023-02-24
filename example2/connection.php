<?php
    $conn = mysqli_connect("localhost", 'root', '', 'student');
    if(!$conn){
        echo "connection failed".mysqli_error();
    }
?>