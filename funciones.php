<?php
//Elaboración de una tabla para el horario

$diasDeLaSemana = ["Lunes", "Martes", "miercoles", "Jueves", "Viernes"];

$lunes = [
    ["Asignatura" => "EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
    ["Asignatura" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
    ["Asignatura" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
    ["Asignatura" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"]
];

$martes = [
    ["Asignatura" => "DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
    ["Asignatura" => "DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
    ["Asignatura" => "DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
    ["Asignatura" => "DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"]
];


$miercoles = [
    ["Asignatura" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
    ["Asignatura" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
    ["Asignatura" => "DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
    ["Asignatura" => "DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"]
];


$jueves = [
    ["Asignatura" => "DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
    ["Asignatura" => "DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
    ["Asignatura" => "DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
    ["Asignatura" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
    ["Asignatura" => "DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
    ["Asignatura" => "EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"]
];


$viernes = [
    ["Asignatura" => "DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
    ["Asignatura" => "DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
    ["Asignatura" => "DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
    ["Asignatura" => "EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
    ["Asignatura" => "DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"]

];



//Función para que me devuelva el orden

function ordenClase($hora, $minutos)
{

    $horaTotal = ($hora * 100) + $minutos;

    if ($horaTotal >= 900 && $horaTotal <= 954) {
        return 0;
    }

    if ($horaTotal >= 955 && $horaTotal <= 1049) {
        return 1;
    }

    if ($horaTotal >= 1050 && $horaTotal <= 1144) {
        return 2;
    }



    if ($horaTotal >= 1215 && $horaTotal <= 1309) {
        return 3;
    }

    if ($horaTotal >= 1310 && $horaTotal <= 1404) {
        return 4;
    }

    if ($horaTotal >= 1405 && $horaTotal <= 1500) {
        return 5;
    }
}



// Función para asociar una hora con la asignatura.

function queTocaAhora($dia, $hora, $minutos){
    global $lunes;
    global $miercoles;
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


    if ($horaTotal <= 659 || $horaTotal >= 1301) {
        return "No hay clases";
    } elseif ($horaTotal >= 945 && $horaTotal <= 1014) {
        return "Recreo";
    } else {
        $orden = ordenClase($hora, $minutos);


        return "Ahora se imparte: " . $diatexto[$orden]["Asignatura"] . "<br> Docente: " . $diatexto[$orden]["Docente"] . "<br> Aula: " . $diatexto[$orden]["Aula"];
    }
}

