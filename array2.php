<?php

$usuarios =[
    "45778542x" => "email@gmail.com",
    "28299389s" => "micorreo@gmail.com",

];

foreach($usuarios as $clave => $valor) {
    print_r('<br>El correo de ' .$clave. ' es ' .$valor);
}
?>