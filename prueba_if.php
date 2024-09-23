<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio estructuras condicionales</title>
</head>

<body>
    <h1>Ejercicio 4</h1>
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

    ?>
</body>

</html>