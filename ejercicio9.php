<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #9</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Ejercicio #9</h1>

        <form action="ejercicio9.php" method="get">
        Intro el costo por horas: <input type="text" name="sal">
        <br> <br>
            <input type="submit" value="Enviar">
        </form>

        <br>
        <hr>
        <br>

        <?php

        if (isset($_GET["sal"])) {
            $N = $_GET["sal"];
            $salario = $N * 8 * 7;
            echo "El salario semanal del Empleado es: $salario";
        }else{
            echo "<h1>Ingrese el Salario</h1>";
        }
        ?>

<div style="text-align: center;">
    <button>
        <a href="index.php"> Inicio</a>
    </button>
    </div>


</body>

</html>