<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

// Destroy all session variables
session_unset();  // Removes all session variables

// Destroy the session completely
session_destroy();

// Redirect to login page
header('Location: login.php');
exit;
?>
