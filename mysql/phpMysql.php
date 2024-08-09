<?php 
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mySQL</title>
    <style>
        table {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            width: fit-content;
        }
        h1 {
            text-align: center;
        }
        .tombol {
            display: block;
            text-align: center;
            margin: 20px auto;
        }
        .tombol input {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <div class="tombol">
        <a href="tambah.php"><input type="submit" value="Tambah"></a>
    </div>
    <table border="2" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NPM</th>
            <th>TANGGAL LAHIR</th>
            <th>JURUSAN</th>
            <th>EDIT</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= htmlspecialchars($mhs["id"]); ?></td>
                <td><?= htmlspecialchars($mhs["nama"]); ?></td>
                <td><?= htmlspecialchars($mhs["npm"]); ?></td>
                <td><?= htmlspecialchars($mhs["tanggal_lahir"]); ?></td>
                <td><?= htmlspecialchars($mhs["jurusan"]); ?></td>
                <td>
                    <a href="edit.php?id=<?= urlencode($mhs["id"]); ?>" >Ubah</a> ||
                    <a href="hapus.php?id=<?= urlencode($mhs["id"]); ?>" onclick="return confirm('yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
