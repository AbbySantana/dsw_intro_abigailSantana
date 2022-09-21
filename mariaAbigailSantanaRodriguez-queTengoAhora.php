<?php
//Elaboración de una tabla para el horario


$horario = [
    "Lunes" => ["Primera" => ["EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"],
                "Segunda" => ["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
                "Tercera"=>["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
                "Cuarta" => ["DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
                "Quinta" => ["DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
                "Sexta" => ["DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"]],

    "Martes" => ["Primera" => ["DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
                "Segunda" => ["DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
                "Tercera"=>["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
                "Cuarta" =>["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
                "Quinta" => ["DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
                "Sexta" =>["DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"]],
                 

    "Miércoles" => ["Primera" =>["DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
                "Segunda" =>["DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
                "Tercera"=>["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
                "Cuarta" =>["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
                "Quinta" => ["DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
                "Sexta" =>["DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"]],     
                

    "Jueves" => ["Primera" =>["DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
                "Segunda" =>["DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
                "Tercera"=>["DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
                "Cuarta" =>["DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
                "Quinta" => ["DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
                "Sexta" =>["EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"]], 
                
                     

    "Viernes" => ["Primera" =>["DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
                "Segunda" =>["DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
                "Tercera"=>["DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
                "Cuarta" => ["EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"],
                "Quinta" =>["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
                "Sexta" =>["DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"]]    


];

foreach($horario as $clave=> $valor){
    echo"<br>$clave<br>";
    
        foreach ($valor as $clave1 => $valor1) {
            echo "<br>$clave1<br>";
            echo "<br>";

            foreach ($valor1 as $clave2 => $valor2) {
                echo "$valor2";
                echo "<br>";
            
            }
        }
}



//Función para que me devuelva el orden

function ordenClase($hora, $minutos){

    $horaTotal=($hora*100) + $minutos;

    if($horaTotal>=800 && $horaTotal<=854){
        return "Primera";
    }

    if($horaTotal>=855 && $horaTotal<=949){
        return "Segunda";
    }

    if($horaTotal>=950 && $horaTotal<=1044){
        return "Tercera";
    }

    if($horaTotal>=1045 && $horaTotal<=1114){
        return "Recreo";
    }

    if($horaTotal>=1115 && $horaTotal<=1209){
        return "Cuarta";
    }

    if($horaTotal>=1210 && $horaTotal<=1304){
        return "Quinta";
    }

    if($horaTotal>=1305 && $horaTotal<=1400){
        return "Sexta";
    }
    
}

// Función para asociar una hora con la asignatura.

function queTocaAhora($dia, $hora, $minutos){
    global $horario;
    $horaTotal=($hora*100) + $minutos;
    
    if ($horaTotal<=759 || $horaTotal>=1401){
        echo "No hay clases";
    }

    $orden = ordenClase($hora, $minutos);
   
    
    return $horario[$dia][$orden];
    
           

}

echo "<br><br>";


$ahora = queTocaAhora("Lunes",8,01);
echo "Ahora se imparte " .$ahora[0];
