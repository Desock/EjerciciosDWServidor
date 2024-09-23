<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Mis contadores</h1>
    <?php
        $n = 10;

        for ($i = 0; $i <= 100; $i++) {
            if ($i == 100) {
                echo "$i <br>";
            } else {
                echo "$i , ";
            }
        }

        while ($n >= 0) {
            if ($n == 0) {
                echo "$n";
            } else {
                echo "$n - ";
            }
            $n--;
        }
    ?>
</body>
</html>