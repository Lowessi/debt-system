<?php
session_start(); // Start the session

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: log.php");
exit(); // Make sure no further code is executed
?>
