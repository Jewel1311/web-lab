<?php
    session_start();
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
    <a href="logout.php">Logout</a>
    <h2>Welcome <?php echo $_SESSION['uname']; ?></h2> <span></span>
    <iframe src="menu.html" name="a" height="500px" width="300px"></iframe>
    <iframe  name="b" height="500px" width=900px"></iframe>

</body>
</html>