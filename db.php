<?php
$host = 'localhost';  // Host name
$dbname = 'ecommerce_admin';  // Database name
$username = 'root';  // Database username
$password = '';  // Database password (for local setup, it's empty)

try {
    // Create connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
