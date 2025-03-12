<?php

session_start();
include('db.php');


if(isset($_GET['save'])){

    $USER = $_GET['username'];
    $EMAIL = $_GET['email'];
    $PASS = $_GET['password'];

    $result = mysqli_query($con, "SELECT * FROM `tb_users` WHERE user = '$USER'");
    $unique = mysqli_fetch_assoc($result);


    if($unique){
        die('Error: Username taken');
    }else{

        $hash = password_hash($PASS, PASSWORD_DEFAULT);

        mysqli_query($con, "INSERT INTO `tb_users`( `user`, `email`, `pass`) VALUES ('$USER','$EMAIL','$hash')");


    }
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class = "auth">

<div class="container">
    <h1 class="logreg">Register</h1>

    <?php if (isset($unique) && $unique) { ?>
        <div class="error-message">Error: Username taken</div>
    <?php } ?>

    <form action="" method="get">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="save" value="Register">
    </form>
    <p class="plain-text">Already have an account? <a class="toggle-button" href='log.php';>Login here</a>.</p></div>
    
</body>
</html>