<?php
    $conn = mysqli_connect("localhost","root","","school");
    if(!$conn){
        echo " not connected".mysqli_connect_error();
    }
?>