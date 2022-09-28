<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilos.css'>
    <script src='main.js'></script>
</head>

<body>
    <table style="width:100%">
        <?php
        include "funciones.php";
        echo "<tr>"; 
        foreach ($diasDeLaSemana as $dia) {
            echo "<th>" . $dia . "</th>";
        }
        echo "</tr>"; 
        for ($i=0; $i <6 ; $i++) { 
            echo "<tr>"; 
            echo "<td>";
           
                foreach ($lunes[$i] as $key => $value) {
                    echo $value . "<br>";
                }
               
            
            echo "</td>"; 
            echo "<td>";
           
                foreach ($martes[$i] as $key => $value) {
                    echo $value . "<br>";
                }
                
            echo "</td>"; 
            echo "<td>";
           
                foreach ($miercoles[$i] as $key => $value) {
                    echo $value . "<br>";
                }
               
            
            echo "</td>"; 
            echo "<td>";
           
                foreach ($jueves[$i] as $key => $value) {
                    echo $value . "<br>";
                }
               
            
            echo "</td>"; 
            echo "<td>";
           
                foreach ($viernes[$i] as $key => $value) {
                    echo $value . "<br>";
                }
               
            
            echo "</td>";



            echo "</tr>"; 
        }
        

        echo "</table>";

        echo "<br><br>";
       

        
        echo queTocaAhora(date('N'), date('G'), date('i'));
         
        ?>

</body>

</html>