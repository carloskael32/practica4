<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio #2</title>
</head>


<body>
    <div style="text-align: center;">
        <h1>Ejercicio #2</h1>




        <form action="ejercicio2.php" method="GET">
            <table align="center">
                <tr>
                    <td>
                        La Paz:
                    </td>
                    <td>
                        <input type="text" name="lp">
                    </td>
                </tr>

                <tr>
                    <td>
                        Cochabamba:
                    </td>
                    <td>
                        <input type="text" name="cb">
                    </td>
                </tr>

                <tr>
                    <td>
                        Beni:
                    </td>
                    <td>
                        <input type="text" name="bn">
                    </td>
                </tr>
                <tr>
                    <td>
                        Pando:
                    </td>
                    <td>
                        <input type="text" name="pn">
                    </td>
                </tr>
                <tr>
                    <td>
                        Santa Cruz:
                    </td>
                    <td>
                        <input type="text" name="sc">
                    </td>
                </tr>
                <tr>
                    <td>
                        Potosi:
                    </td>
                    <td>
                        <input type="text" name="ps">
                    </td>
                </tr>

                <tr>
                    <td>
                        Chuquisaca:
                    </td>
                    <td>
                        <input type="text" name="ch">
                    </td>
                </tr>



                <tr>
                    <td>
                        Tarija:
                    </td>
                    <td>
                        <input type="text" name="ta">
                    </td>
                </tr>

                <tr>
                    <td>
                        Oruro:
                    </td>
                    <td>
                        <input type="text" name="or">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="dat">
                    </td>
                </tr>



            </table>
        </form>
        <hr>

    </div>
    <br>

    <table border="1" align="center">



        <?php
        error_reporting(0);

        $lp = $_GET['lp'];
        $cb = $_GET['cb'];
        $bn = $_GET['bn'];
        $pn = $_GET['pn'];
        $sc = $_GET['sc'];
        $ps = $_GET['ps'];
        $ch = $_GET['ch'];
        $ta = $_GET['ta'];
        $or = $_GET['or'];

        $suma = $lp + $cb + $bn + $pn + $sc + $ps + $ch + $ta + $or;

        if (!empty($_GET['dat'])) {
            $depart = array(
                "La Paz", $_GET['lp'], "Cochabamba", $_GET['cb'], "Beni", $_GET['bn'], "Pando", $_GET['pn'], "Santa Cruz", $_GET['sc'],
                "Potosi", $_GET['ps'], "Chuquisaca", $_GET['ch'], "Tarija", $_GET['ta'], "Oruro", $_GET['or'], "Suma Total:", $suma
            );

            for ($i = 0; $i < count($depart); $i++) {
                echo "<tr>";

                for ($j = 0; $j <= 1; $j++) {
                    echo "<td> " . $depart[$i] . " </td>";
                    $i++;
                }
                echo "</tr>";
                $i--;
            }
        }



        ?>
    </table>
    <br>

    <div style="text-align: center;">
    <button>
        <a href="index.php"> Inicio</a>
    </button>
    </div>

</body>

</html>