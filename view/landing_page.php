<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
</head>
<body>
    <?php
    if(empty($_SESSION['role'])){
        ?>
    <a href="login.php">Login</a>
    <?php
    }
    ?>

    <?php
    session_start();
    if(!empty($_SESSION['role'])){
        ?>
    <a href="logout.php">Logout</a>

    <?php
    }
    ?>

    <center><h1>Welcome</h1></center>
    
</body>
</html>