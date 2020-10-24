<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #8</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Ejercicio #8</h1>

        <form action="ejercicio8.php" method="get">
            
            <input type="submit" value="Lanzar Dados">
        </form>

        <br>
        <hr>
        <br>

        <?php

        echo '<h2>dado  A: ' . rand(1, 6);
        echo "<br>";
        echo 'dado  B: ' . rand(1, 6);
        ?>



<div style="text-align: center;">
    <button>
        <a href="index.php"> Inicio</a>
    </button>
    </div>


</body>

</html>