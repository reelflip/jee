<?php
$servername = "82.25.121.80";
$username = "u131922718_iitjee_tracker";
$password = "HC2>RF|J>a!9";
$dbname = "u131922718_iitjee_tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

