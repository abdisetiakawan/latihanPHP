<?php 
// session
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require "functions.php";
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('data berhasil di hapus');
            document.location.href = 'phpMysql.php';    
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal di hapus');
            document.location.href = 'phpMysql.php';    
        </script>
    ";    
}

?>