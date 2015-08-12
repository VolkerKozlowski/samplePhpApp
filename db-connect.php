<?php
$servername = "172.30.109.140";
$username = "userDRN";
$password = "63qfG8he83nrhCjk";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
