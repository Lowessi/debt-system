<?php

session_start();
include('db.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<body>


    
    <div class="sidebar">
        <div class="logo">
            <h2>DEBTCO</h2>
        </div>
        <ul class="menu">
            <li><a href="Account.php"><i class="fa-solid fa-circle-user"></i> Account</a></li>
            <li><a href="customer.php"><i class="fas fa-building"></i> Customers</a></li>
            <li><a href="Debt.php"><i class="fas fa-building"></i> Debt</a></li>
            <li><a href="Calendar.php"><i class="fas fa-building"></i> Calendar</a></li>
            <li><a href="Complete.php"><i class="fas fa-building"></i> Completed</a></li>
            <li><a href="Settings.php"><i class="fa-solid fa-gear"></i> Settings</a></li>


        </ul>
        <a href="logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i> Log Out
        </a>
    </div>

    </body>
</html>