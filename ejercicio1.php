<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #1</title>
</head>

<body>

<div style="text-align: center;">
    <h1>Ejercicio #1</h1>

    <form action="ejercicio1.php" method="get">
        Ingrese el numero para generar la tabla: <input type="text" name="tabla">
        <input type="submit">
    </form>
    <br>

    <table align="center" border="1">
        <?php
        if (!empty($_GET['tabla'])) {
            $digito = $_GET['tabla'];

            $contador = 1;
            for ($i = 0; $i < $digito; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $digito; $j++) {
                    echo "<td> $contador </td>";
                    $contador++;
                }
                echo "</tr>";
            }
        }

        ?>
    </table>

    <button>
        <a href="index.php"> Inicio</a>
    </button>

    </div>
</body>

</html>