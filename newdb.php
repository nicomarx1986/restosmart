<?php
$servername = "localhost";
$username = "test_user";
$password = "userpass";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE DATABASE test_db";

if ($conn->query($sql) === TRUE) {
    echo "New db created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
