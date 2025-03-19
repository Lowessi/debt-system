<?php
session_start();

$error = ""; 
if (isset($_SESSION['user'])) {
    header("Location: index.php"); // Redirect to home/dashboard
    exit();
}
include('db.php');

if(isset($_GET['login'])){

    $USER = $_GET['user'];
    $PASS = $_GET['pass'];

    $RESULT = mysqli_query($con, "SELECT * FROM `tb_users` WHERE user = '$USER'");

    if($RESULT -> num_rows == 1){
        $userdata = mysqli_fetch_assoc($RESULT);

        if (password_verify($PASS, $userdata['pass'])) { 
            $_SESSION['user'] = $userdata['user']; 

            echo "Login successful";
            unset($_SESSION['error']);
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['error'] = "Invalid username or password.";
        }
    } else {
        $_SESSION['error'] = "Invalid username or password.";
    }

    // Redirect to refresh the page and clear form data
    header("Location: login.php");
    exit();
}

// Retrieve error message for display
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']); // This ensures the error is removed after displaying
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNIN</title>
    <link rel="stylesheet" href="logreg.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="content">
                <h2>DEBTCO</h2>
                <p>Manage your DEBTs easily in DEBTCO</p>
            </div>
        </div>
        <div class="right">
            <h1>Welcome to DEBTCO</h1>
            <form action="#" method = 'get'>
                <label for="user">Username</label>
                <input type="text" name="user" placeholder="Enter your Username" required>

                
                <label for="password">Password</label>
                <input type="password" name="pass" placeholder="Enter your password" required>

                <?php if (!empty($error)) : ?>
                <div class="error" ><?php echo $error; ?></div>
            <?php endif; ?>

                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" name='login'>Sign in</button>
                
                <p class="or">or</p>

                <p class="signup">New Account? <a href="register.php">Create Account</a></p>
            </form>
        </div>
    </div>
</body>
</html>
