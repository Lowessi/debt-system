<?php
session_start();
include('db.php');

if(isset($_GET['log'])){

    $USER = $_GET['username'];
    $PASS = $_GET['password'];

    $result = mysqli_query($con, "SELECT * FROM `tb_users` WHERE user = '$USER'");

    if(mysqli_num_rows($result) > 0){

        $user_data = mysqli_fetch_assoc($result);

        if (password_verify($PASS, $user_data['pass'])) {
            $_SESSION['ID'] = $user_data['user_id'];
            $_SESSION['user'] = $user_data['user'];

            header("Location: dashboard.php"); 
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "No user found with that username!";
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
    <div>
    <div class="container">
        <h2>Login</h2>

        <?php
        if (isset($error)) {
            echo "<div style='color: red;'>$error</div>";
        }
        ?>

        <form  method="get">
            <input type="text" id="username" name="username" placeholder="Username" required><br>

            <input type="password" id="password" name="password" placeholder="Password" required><br>

            <input type="submit" name="log" value="Login">
            </form>

        <p class="plain-text">Already have an account? <a class="toggle-button" href='reg.php';>Register here</a>.</p></div>
        </div>
</body>
</html>