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
$judul_buku = "";
$pengarang = "";
$sql = "select * from buku where id = " . $_GET["id"];
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $judul_buku = $row["judul_buku"];
        $pengarang = $row["pengarang"];
    }
}
?>
<html>

<body>
    <h1>Edit data</h1>
    <form method="post" action="http://localhost/crud/saveedit.php">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"/>
        Judul Buku : <input name="judul_buku" type="text" value="<?php echo $judul_buku; ?>"/><br />
        Pengarang : <input name="pengarang" type="text" value="<?php echo $pengarang; ?>"/><br />
        <input type="submit" value="Simpan" />
    </form>
</body>

</html>