<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #7</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Ejercicio #7</h1>

        <form action="ejercicio7.php" method="get">
            Ingrese un Numero: <input type="text" name="num">
            <input type="submit">
        </form>

        <br>
        <hr>
        <br>

        <?php

        if (!empty($_GET['num'])) {


            $formato = new NumberFormatter("es-ES", NumberFormatter::SPELLOUT);
            $n = $_GET['num'];
            $numero = intval(floor($n));
            echo  $formato->format($numero) ;
            
        }else{
            echo "<h2>Ingrese un Numero</h2>";
        }
        ?>

<div style="text-align: center;">
    <button>
        <a href="index.php"> Inicio</a>
    </button>
    </div>


</body>

</html>