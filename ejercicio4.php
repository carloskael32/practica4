<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #4</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Ejercicio #4</h1>

        <form action="ejercicio4.php" method="get">
            Ingrese la fecha:  <input type="text" name="date">
            <input type="submit">
        </form>
        <br>
        <hr>

        <?php

        if (!empty($_GET['date'])) {
            $original_date = $_GET['date'];
            $timestamp = strtotime($original_date);
            
            $new_date = date("d-m-y", $timestamp);
            echo "  <h2>La nueva fecha es:</h2><h1>$new_date</h1>";
    
        }
 

        ?>

<div style="text-align: center;">
    <button>
        <a href="index.php"> Inicio</a>
    </button>
    </div>

</body>

</html>