<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table>";
        echo "<th colspan=2>Números aleatorios</th>";
        echo "<tr><td>Número</td><td> Número al cuadrado</td></tr>";
        for($i=0;$i<=10;$i++){
            $numero = rand(5,20);
            $cuadrado = $numero*$numero;
            echo "<tr><td>".$numero."</td><td>".$cuadrado."</td></tr>";
        };
        echo "</table>";
    ?>
</body>
</html>