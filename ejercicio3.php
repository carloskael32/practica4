<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #3</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Ejercicio #3</h1>

        <form action="ejercicio3.php" method="get">
            Ingrese un numero: <input type="text" name="num">
            <input type="submit">
        </form>
        <br>
        <hr>

        <?php

        if (!empty($_GET['num'])) {

            $num = $_GET['num'];

            $c = 0;
            for ($j = 1; $j < $num; $j++) {
                $o = $num % $j;
                if ($o == 0) {
                    $c = $c + $j;
                }
            }
            if ($c == $num) {
                echo "<h1>$num</h1>  <h1> Es un numero Perfecto</h1>";
            }else{
                echo "<h1>$num</h1> <h1>No es un numero Perfecto</h1>";
            }
            


        }

        ?>

<div style="text-align: center;">
    <button>
        <a href="index.php"> Inicio</a>
    </button>
    </div>

</body>

</html>