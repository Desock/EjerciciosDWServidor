<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio estructuras condicionales</title>
</head>

<body>
    <h1>Ejercicio 5</h1>
    <?php
    $nota1 = rand(0, 10);
    $nota2 = rand(0, 10);
    $nota3 = rand(0, 10);
    $notaAux = null;

   if ($nota1 > $nota2) {
        $nota1 = $notaAux;
        echo "<p>La mayor es: $notaAux</p>";
   } else if ($nota2 > $nota3) {
        $nota2 = $notaAux;
        echo "<p>La mayor es: $notaAux</p>";
   } else {
        $nota3 = $notaAux;
        echo "<p>La mayor es: $notaAux</p>";
   }

    switch ($notaAux) {
        case $notaAux <= 4:
            echo '<p>Insuficiente</p>';
        case $notaAux > 5 and $notaAux < 6:
            echo '<p>Suficiente</p>';
        case $notaAux > 6 and $notaAux < 8:
            echo '<p>Bien<p>';
        case $notaAux > 8 and $notaAux < 9:
            echo '<p>Notable</p>';
        case $notaAux > 9 and $notaAux <= 10:
            echo '<p>Sobresaliente</p>';
        default:
            echo '<p>Nota no valida</p>';
    }
    ?>
</body>

</html>