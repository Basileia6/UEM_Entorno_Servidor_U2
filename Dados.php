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
        $jugadores=3;
        $ganador=0;
        $puntuacion=0;
        for($i=1;$i<=$jugadores;$i++){
            echo "<p><h3> Tirada del jugador ".$i."</h3></p></br>";
            $total = 0;
            for($j=1;$j<=3;$j++){
                $numero = rand(1,6);
                $total+=$numero;
                echo "<img width=10% src=./img/$numero.jpg>";
            };
            echo "<p>El jugador ".$i." ha sacado ".$total." puntos</p>";
            if($total>$puntuacion){
                $ganador=$i;
                $puntuacion=$total;
            };
        }; 
        echo "<p><h1>El ganador es el jugador ".$ganador." con ".$puntuacion." puntos.</h1></p>"   
    ?>
</body>
</html>