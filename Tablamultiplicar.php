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
        $tabla=rand(0,10);
        echo "<table border=1px>";
        echo "<th colspan=2>La tabla de multiplicar del ".$tabla;
        for($i=0;$i<=10;$i++){
            $numero = $i*$tabla;
            echo "<tr><td>".$tabla."x".$i."</td><td>".$numero."</td></tr>";
        };
        echo "</table>";
    ?>
</body>
</html>