<?php
    include 'connection.php';
    $rno = $_POST['sel'];
    $query = "Select * from details where rollno='$rno'";
    $res = mysqli_query($conn, $query);
    foreach($res as $row){
        echo $row['name'];
    }
?>