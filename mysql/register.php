<?php 
include "functions.php";

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('user baru ditambahkan');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('user gagal ditambahkan');
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
    <title>Halaman Register</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        input {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        <ul>
            <label for="username">username :</label>
            <input type="text" id="username" name="username"  />
        </ul>
        <ul>
            <label for="password">password :</label>
            <input type="password" id="password" name="password"  />
        </ul>
        <ul>
            <label for="password2">konfirmasi password :</label>
            <input type="password" id="password2" name="password2" />
        </ul>
        <ul>
            <button type="submit" name="register">Register</button>
        </ul>
    </form>
</body>
</html>