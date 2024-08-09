<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>response PHP</title>
</head>
<body>
    <h1>Hello, <?php echo $_POST["username"]; ?></h1>
    <p>password : <?php echo $_POST["password"]; ?></p>
    <a href="reqPost.php"><input type="submit" value="kembali"></a>
</body>
</html>