<?php
session_start();
include('db.php');
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>


    
    <div class="sidebar">
        <div class="logo">
            <h2>DEBTCO</h2>
        </div>
        <ul class="menu">
            <li><i class="fas fa-home"></i> Account</li>
            <li><i class="fas fa-building"></i> Customers</li>
            <li><i class="fas fa-calculator"></i> Debt</li>
            <li><i class="fas fa-users"></i> Calendar</li>
            <li><i class="fas fa-key"></i> Completed</li>
            <li><i class="fas fa-bell"></i> Settings</li>

        </ul>
        <a href="logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i> Log Out
        </a>
    </div>


    <div class="main">

        <div class="topbar">

            <div class="search-box">
                <input type="text" placeholder="Search here">
                <i class="fas fa-search"></i>
            </div>

            <div class="profile">
                <span ><?php echo $_SESSION['user']; ?></span>
                <img src="profile.jpg" alt="Profile Picture">
            </div>
        </div>

    <div class="cards">

    <div class="card">
        <div class="icon">pic</div>
        <div class="total">
        <p class="text-muted">Total Customers</p>
        <h2 >0</h2>
        </div>
    </div>

    <div class="card">
        <div class="icon">pic</div>
        <div class="total">
        <p class="text-muted">Total Debts</p>
        <h2 >0</h2>
    </div>
</div>
</div>

    <div class="table">
        <table class="due">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Debt</th>
                    <th>Quantity</th>
                    <th>Due</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>q</td>
                    <td>q</td>
                    <td>q</td>
                    <td>q</td>
                    <td>q</td>
                    <td>q</td>
                </tr>
            </thead>
        </table>
        
    </div>
    </div>
</body>
</html>
