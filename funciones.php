<?php
date_default_timezone_set('Europe/London');



//Función para que me devuelva el orden

function ordenClase($hora, $minutos)
{

    $horaTotal = ($hora * 100) + $minutos;

    if ($horaTotal >= 800 && $horaTotal <= 854) {
        return 0;
    }

    if ($horaTotal >= 855 && $horaTotal <= 949) {
        return 1;
    }

    if ($horaTotal >= 950 && $horaTotal <= 1044) {
        return 2;
    }



    if ($horaTotal >= 1115 && $horaTotal <= 1209) {
        return 3;
    }

    if ($horaTotal >= 1210 && $horaTotal <= 1304) {
        return 4;
    }

    if ($horaTotal >= 1305 && $horaTotal <= 1400) {
        return 5;
    }
}



// Función para asociar una hora con la asignatura.

function queTocaAhora($dia, $hora, $minutos){
    global $lunes;
    global $martes;
    global $miercoles;
    global $jueves;
    global $viernes;
    global $horario;
    $horaTotal = ($hora * 100) + $minutos;
    If($dia>=1 || $dia<=5){
            if($dia==1){
                    $diatexto=$lunes;
            }
            if($dia==2){
                $diatexto=$martes;
            }
            if($dia==3){
                $diatexto=$miercoles;
            }
            if($dia==4){
                $diatexto=$jueves;

            }   
            if($dia==5){
            $diatexto=$viernes;
    
            }

    }


    if ($horaTotal <= 759 || $horaTotal >= 1401) {
        return "No hay clases";
    } elseif ($horaTotal >= 1045 && $horaTotal <= 1114) {
        return "Recreo";
    } else {
        $orden = ordenClase($hora, $minutos);


        return "Ahora se imparte: " . $diatexto[$orden]["Asignatura"] . "<br> Docente: " . $diatexto[$orden]["Docente"] . "<br> Aula: " . $diatexto[$orden]["Aula"];
    }
}



