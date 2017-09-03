<?php
$servername = "208.91.198.109";
$username = "itglarid_docsea";
$password = "docsea%23";

// Create connection
$conn = new mysql($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
