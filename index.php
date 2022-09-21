<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <table style="width:100%">
        <?php
        include "funciones.php";

       
        echo "<tr>";
        foreach ($horario as $clave => $valor) {
            echo "<td>" . $clave;


            foreach ($valor as $clave1 => $valor1) {
                echo "<br>" . $clave1;


                foreach ($valor1 as $clave2 => $valor2) {
                    echo "<br>" . $valor2;
                }
            }
            echo "</td>";
        }
        echo "</tr>";

        echo "</table>";

        echo "<br><br>";


        echo queTocaAhora("Lunes", 7, 59);

        ?>

</body>

</html>