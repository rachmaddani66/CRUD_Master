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

$sql = "select * from buku";
$result = $conn->query($sql);
?>
<html>

<body>
    <h1>Menambahkan peminjaman baru</h1>
    <form method="post" action="http://localhost/crud/savepeminjaman.php">
        Judul Buku :
        <select name="idbuku">
            <?php
            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
            ?>
                    <option value="<?php echo $row["id"] ?>"><?php echo $row["judul_buku"] ?></option>
            <?php
                    $i = $i + 1;
                }
            }
            ?>
        </select> <br />
        Tanggal Pinjam : <input name="tanggal_pinjam" type="text" /><br />
        <input type="submit" value="Simpan" />
    </form>
</body>

</html>