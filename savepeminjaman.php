<?php
echo $_POST["tanggal_pinjam"];
echo $_POST["idbuku"];
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

$sql = "INSERT INTO peminjaman (idbuku, tanggal_pinjam)
    VALUES ('" . $_POST["idbuku"] . "', '" . $_POST["tanggal_pinjam"] . "')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/crud");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
