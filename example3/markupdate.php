<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $rollno = $_POST['sel'];
        $quer = "select physics,chemistry from marks where rollno='$rollno'";
        $resul = mysqli_query($conn, $quer);
        foreach($resul as $val){
            $p = $val['physics'];
            $c = $val['chemistry'];
        }
        if(empty($_POST['phy'])){
            $phy = $p;
        }
        else{
            $phy = $_POST['phy'];
        }
        if(empty($_POST['chem'])){
            $chem = $c;
        }
        else{
             $chem = $_POST['chem'];
        }



        $query = "update marks set physics = '$phy' , chemistry='$chem' where rollno = '$rollno'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "Not updated";
        }
        else{
            echo "updated";
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
    <h1>Update Mark</h1>
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
        <input type="submit" value="update" name="submit">
    </form>
    <?php
        include 'viewmark.php';
    ?>
</body>
</html>