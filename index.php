<?php
$servername = "208.91.198.109";
$username = "itglarid_docsea";
$password = "doc@sea12";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
