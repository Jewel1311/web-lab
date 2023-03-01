<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $rollno = $_POST['sel'];
        $phy = $_POST['phy'];
        $chem = $_POST['chem'];

        $query = "INSERT INTO `marks`(`physics`, `chemistry`, `rollno`) VALUES ('$phy','$chem','$rollno')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "Not inserted";
        }
        else{
            echo "Inserted";
        }
    }


    $q = "select * from student";
    $res = mysqli_query($conn, $q);

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
    <h1>Add Mark</h1>
    <form action="" method="POST">
        <select name="sel" style="width: 100px;">
            <?php 
                foreach($res as $r)
                {
            ?>
                    <option value="<?php echo $r['rollno'];?>"><?php echo $r['rollno'];?><option>
            <?php
                }
            ?> 
        </select><br>
        <input type="text" name="phy" placeholder="physics"><br>
        <input type="text" name="chem" placeholder="chemistry"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        include 'viewmark.php';
    ?>
</body>
</html>