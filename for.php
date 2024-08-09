<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP part 1</title>
    <style>
        .ganjil {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <table border="2" cellpadding="15" cellspacing="0">
        <?php 
        for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 0) {
                echo "<tr class='ganjil'>";
            } else {
                echo "<tr>";
            }
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>