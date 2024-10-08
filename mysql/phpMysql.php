<?php 
// session
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require "functions.php";

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mySQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        table th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .form-container {
            text-align: center;
            margin: 20px;
        }
        .form-container input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
        .tombol {
            text-align: center;
            margin: 20px;
        }
        .tombol a {
            text-decoration: none;
        }
        .tombol input {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .tombol input:hover {
            background-color: #0056b3;
        }
        .img {
            width: 5%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <div class="form-container">
        <form action="" method="post">
            <input type="text" name="keyword" placeholder="Cari mahasiswa..." autofocus>
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>

     

    <div class="tombol">
        <a href="tambah.php"><input type="button" value="Tambah"></a>
    </div>
    <!-- logout -->
    <div class="form-container"><a href="logout.php">Logout</a></div>
    <!-- navigasi -->
    <div class="form-container">
        <?php if ($halamanAktif > 1) : ?>
            <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
        <?php endif; ?>
    
        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
                <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
            <?php else : ?>
                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
    
        <?php if ($halamanAktif < $jumlahHalaman) : ?>
            <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
        <?php endif; ?>
    </div>


    <table>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NPM</th>
            <th>TANGGAL LAHIR</th>
            <th>JURUSAN</th>
            <th>EDIT</th>
            <th>GAMBAR</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= htmlspecialchars($mhs["id"]); ?></td>
                <td><?= htmlspecialchars($mhs["nama"]); ?></td>
                <td><?= htmlspecialchars($mhs["npm"]); ?></td>
                <td><?= htmlspecialchars($mhs["tanggal_lahir"]); ?></td>
                <td><?= htmlspecialchars($mhs["jurusan"]); ?></td>
                <td>
                    <a href="edit.php?id=<?= urlencode($mhs["id"]); ?>">Ubah</a> ||
                    <a href="hapus.php?id=<?= urlencode($mhs["id"]); ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
                <td><img src="img/<?= $mhs["gambar"]; ?>" alt="" style="width: 100px; height: auto;"></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
