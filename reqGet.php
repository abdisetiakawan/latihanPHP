<?php 
$mahasiswa = [["nama" => "Aldi", "npm" => "213040030"], ["nama" => "Erna Damayanti", "npm" => "2200015"], ["nama" => "Ratna Dewi", "npm" => "12312"]] ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan variable global</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>"><?= $mhs["nama"]; ?></a>
            <br>
            <a>NPM : <?= $mhs["npm"]; ?></a>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>