<?php
echo $_POST["judul_buku"];
echo $_POST["pengarang"];

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
$first_name = "Fian";
$last_name = "briliandi";
$name = "Nama : " . $first_name." ".$last_name;
$sql = "UPDATE buku SET judul_buku = '" . $_POST["judul_buku"] . "', pengarang = '" . $_POST["pengarang"] . "' WHERE id = " . $_POST["id"];

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/crud");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
