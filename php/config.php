<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "✅ PHP is working";

$servername = "82.25.121.80";
$username = "u131922718_iitjee_tracker";
$password = "HC2>RF|J>a!9";
$dbname = "u131922718_iitjee_tracker";
$port       = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


