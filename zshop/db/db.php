<?php
// Database configuration
$host = 'localhost';  // Your database host (usually localhost)
$dbname = 'zshop';    // Your database name
$username = 'root';   // Your database username
$password = '';       // Your database password (empty for XAMPP/WAMP by default)

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    date_default_timezone_set('UTC');  // Optional: set timezone to UTC
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
