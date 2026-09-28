<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $x=313;
        $y=979;
        $z=123;
    ?>

    <h1>Ejercicio 3</h1>

    <p>El valor de x es: <?php echo $x;?>, 
    el valor de y es: <?php echo $y;?>
    y el valor de z es: <?php echo $z;?></p>

    <p>La suma de  <?php echo $x;?>, <?php echo $y;?> y <?php echo $z;?> es: <?php echo $x+$y+$z;?></p>
    <p>La resta de x, y y z es: <?php echo $x-$y-$z;?></p>
    <p>La multiplicación de x, y y z es: <?php echo $x*$y*$z;?></p>
    <p>La division de x e y es: <?php echo $x/$y;?></p>

    <p>La division de x e y con un casting es: <?php echo (int)($x/$y);?></p>
    <p>La division de x e y con solo lso dos primeros numeros es: <?php echo number_format((int)($x/$y), 2);?></p>
    <p>La media de x, y y z es: <?php echo ($x+$y+$z)/3;?></p>
</body>
</html>
