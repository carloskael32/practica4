<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #6</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Ejercicio #6</h1>

        <form action="ejercicio6.php" method="get">
            Ingrese la fecha: <input type="text" name="date">
            <input type="submit">
        </form>

        <br>
        <hr>
        <br>

        <?php

        if (!empty($_GET['date'])) {
            setlocale(LC_TIME, "spanish");
            $mi_fecha = $_GET['date'];
            $mi_fecha = str_replace("/", "-", $mi_fecha);
            $Nueva_Fecha = date("d-m-Y", strtotime($mi_fecha));
            $Mes_Anyo = strftime(" %d de %B de %Y", strtotime($Nueva_Fecha));

            echo " <h1>$Mes_Anyo</h1>";
        } else {
            echo "<h2>Ingrese una Fecha</h2>";
        }
        ?>
    <div style="text-align: center;">
    <button>
        <a href="index.php"> Inicio</a>
    </button>
    </div>


</body>

</html>