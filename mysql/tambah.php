<?php 
// session
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
include "functions.php";
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'phpMysql.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
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
    <title>Form Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label><br>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="npm">NPM : </label><br>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="tanggalLahir">Tanggal Lahir : </label><br>
                <input type="text" name="tanggalLahir" id="tanggalLahir" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label><br>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar : </label><br>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan</button>
            </li>
        </ul>
    </form>
</body>
</html>