<?php
     $qu = "select student.rollno,student.name,marks.physics,marks.chemistry,marks.rollno from student, marks where student.rollno = marks.rollno";
     $re = mysqli_query($conn, $qu);
     $topper = "";
     $mark = 0;
     foreach($re as $row)
     {
         if($mark < ($row['physics'] + $row['chemistry'])){
             $mark = $row['physics'] + $row['chemistry'];
             $topper = $row['name'];
         }
     }
?>
<html>
<body>
<br>
    <br>
    <h2>Details</h2>
        <br>
        <h3>Topper : <?php echo $topper; ?> </h3>
    <br>
    <table border="1">
        <thead>
            <td>Rollno</td>
            <td>Name</td>
            <td>Physics</td>
            <td>Chemistry</td>
            <td>Total</td>
            <td>Action</td>

            </thead>
        <?php
            foreach($re as $row)
            {
        ?>
            <tr> 
                <td><?php echo $row['rollno'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['physics'];?></td>
                <td><?php echo $row['chemistry'];?></td>
                <td><?php echo $row['physics'] + $row['chemistry'];?></td>
                <td><a href="deletemark.php?rollno=<?php echo $row['rollno']; ?>">Delete</a>

            </tr>
        <?php
            }
        ?>
        
    </table>
</body>
</html>