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

$sql = "INSERT INTO buku (judul_buku, pengarang)
    VALUES ('" . $_POST["judul_buku"] . "', '" . $_POST["pengarang"] . "')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/crud");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
