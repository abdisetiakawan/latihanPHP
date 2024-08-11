<?php 
include "functions.php";
if (isset($_POST["login"])) {
    if (login($_POST) > 0) {
        echo "
            <script>
                alert('anda berhasil login');
                document.location.href = 'phpMysql.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('anda gagal login');
                document.location.href = 'login.php';
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
    <title>Login PHP</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
        </ul>
        <ul>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
        </ul>
        <ul>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>