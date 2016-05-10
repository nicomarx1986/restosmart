<?php
$servername = "localhost";
$username = "test_user";
$password = "testpass";
$dbname = "tests";
$name = $_POST["nombre"];
$surname = $_POST["apellido"];

echo "El nombre ingresado es $name <br>";
echo "El apellido es $surname <br>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO test_table (id, nombre, apellido)
VALUES (NULL,'$name','$surname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
