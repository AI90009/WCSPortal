<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("functions.php");

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_login_state'])) {
    // Call the logout function to clear session data
    logoutSession();

    // Redirect the user to the homepage or login page
    header("Location: ../../index.php");
    exit();
}
?>