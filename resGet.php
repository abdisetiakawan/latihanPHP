<?php 
if (!isset($_GET["nama"])) {
  header("Location: latihan3.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemanggilan GET</title>
</head>
<body>
  <h1><?php echo $_GET["nama"] ?></h1>
  <a href="latihan3.php">back</a>

</body>
</html>