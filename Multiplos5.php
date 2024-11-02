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
        $numero=0;
        while($numero <= 100){
            if($numero % 5 == 0){
                echo $numero."<br/>";
            }
            $numero++;
        }
    ?>
</body>
</html>