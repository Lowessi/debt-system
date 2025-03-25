<?php

session_start();

$error = ""; 

if (isset($_SESSION['user'])) {
    header("Location: index.php"); // Redirect to home/dashboard
    exit();
}

include('db.php');

if (isset($_GET['register'])) {

    $USER = $_GET['user'];
    $EMAIL = $_GET['email'];
    $PASS = $_GET['pass'];
    $CONPASS = $_GET['conpass'];

    $result = mysqli_query($con, "SELECT * FROM `tb_users` WHERE user = '$USER'");
    $unique = mysqli_fetch_assoc($result);

    if ($unique) {
        $_SESSION['error'] = "Error: Username taken";
    } else if ($PASS !== $CONPASS) {
        $_SESSION['error'] = "Error: Password do not match";
    } else {
        $hashed = password_hash($PASS, PASSWORD_DEFAULT);
        mysqli_query($con, "INSERT INTO `tb_users`( `user`, `email`, `pass`) VALUES ('$USER','$EMAIL','$hashed')");
        unset($_SESSION['error']);
        header('Location:' . $_SERVER['PHP_SELF']);
        exit();
    }

    // Redirect after setting an error
    header("Location: register.php");
    exit();
}

// ✅ Moved this outside the `if(isset($_GET['register']))` block
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']); // Clears the error after displaying
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="styles/logreg.css">
</head>
<body>
    <div>
      
        <div class="rightt">
            <h1>Create an Account</h1>
            <form action="#">
                <label for="user">Username</label>
                <input type="text" name="user" placeholder="Enter your Username" required>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" name="pass" placeholder="Create a password" required>

                <label for="confirm-password">Confirm Password</label>
                <input type="password" name="conpass" placeholder="Confirm your password" required>
                <?php if (!empty($error)) : ?>
                <div class="error" ><?php echo $error; ?></div>
            <?php endif; ?>

                <button type="submit" name='register'>Sign up</button>

                <p class="or">or</p>

                <p class="signup">Already have an account? <a href="login.php">Sign in</a></p>
            </form>
        </div>
    </div>
</body>
</html>
