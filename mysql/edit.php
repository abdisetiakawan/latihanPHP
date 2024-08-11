<?php 
require "functions.php";
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di ubah');
                document.location.href = 'phpMysql.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal di ubah');
                document.location.href = 'phpMysql.php';
            </script>
        ";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <label for="nama">NAMA</label>
        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
        <br>
        <label for="npm">NPM</label>
        <input type="text" name="npm" id="npm" value="<?= $mhs["npm"]; ?>">
        <br>
        <label for="jurusan">JURUSAN</label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
        <br>
        <label for="tanggalLahir">TANGGAL LAHIR</label>
        <input type="date" name="tanggalLahir" id="tanggalLahir" value="<?= $mhs["tanggal_lahir"]; ?>">
        <br>
        <label for="gambar">gambar</label>
        <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>