<?php
    include 'connection.php';
    $name = $_POST['name'];
    $age = $_POST['age'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    $secq = $_POST['sel'];
    $seca = $_POST['security'];
    $email = $_POST['emailid'];
    $lan = '';
    if(isset($_POST['mal']))
        $lan = 'malayalam';
    if(isset($_POST['eng']))
        $lan =  $lan.' '.'english';
    if(isset($_POST['hin']))
        $lan =  $lan.' '.'hindi';
    $hphone = $_POST['hphone'];
    $ophone = $_POST['ophone'];

    if($pass1 == $pass2){

        $sql = "insert into applicant (name,age,password,secques,secans,email,language,homeph,officeph)
                values ('$name',$age,'$pass1','$secq','$seca','$email','$lan','$hphone','$ophone')";
        
        if(mysqli_query($conn, $sql)){
            echo "Inserted successfully";

        }
        else{
            echo "Error";
        }
    }
    else{
        echo "Passwords must be same";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant</title>
</head>
<body>
    <table style="margin-top:50px;">
        <tr>
            <td>Name : </td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Age : </td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>Email  : </td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Home phone : </td>
            <td><?php echo $hphone; ?></td>
        </tr>
        <tr>
            <td>Office phone : </td>
            <td><?php echo $ophone; ?></td>
        </tr>
    </table>
</body>
</html>