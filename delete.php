<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "delete from buku where id = '" . $_GET["id"] . "'";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/crud");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
