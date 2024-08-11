<?php 

session_start();
if (isset($_SESSION["login"])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

?>