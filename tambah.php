<?php
    $isiplaceholder = "Masukkan nama";
?>
<html>

<body>
    <h1>Menambahkan data baru</h1>
    <form method="post" action="http://localhost/crud/save.php">
        Judul Buku : <input placeholder="<?php echo $isiplaceholder; ?>" name="judul_buku" type="text" /><br />
        Pengarang : <input name="pengarang" type="text" /><br />
        <input type="submit" value="Simpan" />
    </form>
</body>

</html>