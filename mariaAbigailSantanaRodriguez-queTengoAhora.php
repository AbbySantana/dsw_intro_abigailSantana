<?php

$horario = [
    "Lunes" => array("Primera" => "EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201");
                    array("Segunda" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201");
                        array("Tercera"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201");
                            array("Cuarta" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201");
                                array("Quinta" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201");
                                    array("Sexta" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201");

    
]

function queTocaAhora($dia, $hora, $minutos)
{
    foreach($horario as $clave=> $valor){
        if($dia=="Lunes")
            if($hora==8 && $minutos<=55)   
                foreach($horario as $clave1 => $valor1) 
                 echo "Ahora toca $valor1";
    }

}