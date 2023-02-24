<!-- <select name="" >
    <option value=>1</option>
    <option value=>2</option>
    <option value=>3</option>
</select> -->


<?php
    session_start();
    include 'connection.php';
    if(isset($_POST['login'])){
        $roll = $_POST['rollno'];
        $name = $_POST['name'];
        $phy = $_POST['physics'];
        $chem = $_POST['chemistry'];
        $maths = $_POST['maths'];


        $query = "INSERT INTO `details`(`rollno`, `name`, `physics`, `maths`, `chemistry`) VALUES ('$roll','$name','$phy','$maths','$chem')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Inserted";
        }
        else{
            echo " not inserted";
        }
    }
    $q = "select * from details";
    $rows = mysqli_query($conn, $q);

    $tmark = 0;
    foreach($rows as $r){
        $total = $r['physics']+$r['chemistry']+$r['maths'];
        if($total > $tmark){
            $_SESSION['topper'] = $r['name'];
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
    <form action="" method="POST">
        <select>
           <?php foreach($rows as $row){ ?> 
            <option ><?php echo $row['rollno'];?> </option><?php } ?>
           </select>
        <input type="text" name="name" placeholder = "name" required><br>
        <input type="text" name="physics" placeholder = "phy" required><br>
        <input type="text" name="chemistry" placeholder = "chem" required><br>
        <input type="text" name="maths" placeholder = "maths" required><br>
        <input type="submit" name="login"> 
    </form><br>

    <form action="new.php" method="POST">
        <select name="sel">
           <?php foreach($rows as $row){ ?> 
            <option value=<?php echo $row['rollno'];?>><?php echo $row['rollno'];?> </option><?php } ?>
           </select>
           <input type="submit" value="submit">
    </form>


    <h3>Topper : <?php echo $_SESSION['topper']; ?> </h3>
    <table border="1">
            <td>Rollno</td>
            <td>Name</td>
            <td>Physics</td>
            <td>Chemistry</td>
            <td>Maths</td>
            <td>Total</td>
        <?php
        foreach($rows as $row){?>
            <tr>
                <td><?php echo $row['rollno'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['physics'];?></td>
                <td><?php echo $row['chemistry'];?></td>
                <td><?php echo $row['maths'];?></td>
                <td><?php echo $row['physics']+$row['chemistry']+$row['maths'];?></td>
            <tr>
        <?php
        }
        ?>
            
        
    </table>
</body>
</html>