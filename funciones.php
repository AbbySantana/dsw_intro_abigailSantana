
<?php
//Elaboración de una tabla para el horario


$horario = [
    "Lunes" => [
        "Primera" => ["Asignatura"=>"EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"],
        "Segunda" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
        "Tercera" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
        "Cuarta" => ["Asignatura"=>"DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
        "Quinta" => ["Asignatura"=>"DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
        "Sexta" => ["Asignatura"=>"DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"]
    ],

    "Martes" => [
        "Primera" => ["Asignatura"=>"DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
        "Segunda" => ["Asignatura"=>"DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
        "Tercera" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
        "Cuarta" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
        "Quinta" => ["Asignatura"=>"DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
        "Sexta" => ["Asignatura"=>"DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"]
    ],


    "Miércoles" => [
        "Primera" => ["Asignatura"=>"DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
        "Segunda" => ["Asignatura"=>"DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
        "Tercera" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
        "Cuarta" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
        "Quinta" => ["Asignatura"=>"DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
        "Sexta" => ["Asignatura"=>"DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"]
    ],


    "Jueves" => [
        "Primera" => ["Asignatura"=>"DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
        "Segunda" => ["Asignatura"=>"DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
        "Tercera" => ["Asignatura"=>"DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
        "Cuarta" => ["Asignatura"=>"DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
        "Quinta" => ["Asignatura"=>"DEW", "Docente" => "Maria del Carmen Rodríguez Suárez", "Aula" => "G201"],
        "Sexta" => ["Asignatura"=>"EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"]
    ],



    "Viernes" => [
        "Primera" => ["Asignatura"=>"DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
        "Segunda" => ["Asignatura"=>"DOR", "Docente" => "Ermís Papakinstantinouu Báez", "Aula" => "G201"],
        "Tercera" => ["Asignatura"=>"DPL", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "G201"],
        "Cuarta" => ["Asignatura"=>"EMR", "Docente" => "Maria del Sol García Tarajano", "Aula" => "G201"],
        "Quinta" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"],
        "Sexta" => ["Asignatura"=>"DSW", "Docente" => "Sergio Ramos Suarez", "Aula" => "G201"]
    ]


];





//Función para que me devuelva el orden

function ordenClase($hora, $minutos)
{

    $horaTotal = ($hora * 100) + $minutos;

    if ($horaTotal >= 800 && $horaTotal <= 854) {
        return "Primera";
    }

    if ($horaTotal >= 855 && $horaTotal <= 949) {
        return "Segunda";
    }

    if ($horaTotal >= 950 && $horaTotal <= 1044) {
        return "Tercera";
    }



    if ($horaTotal >= 1115 && $horaTotal <= 1209) {
        return "Cuarta";
    }

    if ($horaTotal >= 1210 && $horaTotal <= 1304) {
        return "Quinta";
    }

    if ($horaTotal >= 1305 && $horaTotal <= 1400) {
        return "Sexta";
    }
}

// Función para asociar una hora con la asignatura.

function queTocaAhora($dia, $hora, $minutos)
{
    global $horario;
    $horaTotal = ($hora * 100) + $minutos;

    if ($horaTotal <= 759 || $horaTotal >= 1401) {
        return "No hay clases";
    } elseif ($horaTotal >= 1045 && $horaTotal <= 1114) {
        return "ahora es el recreo";
    } else {
        $orden = ordenClase($hora, $minutos);


        return "ahora de imparte: " .$horario[$dia][$orden];
    }
}




