<?php

$usuarios = [

    "user1 " => "clave1",
    "user2 " => "clave2",
    "user3 " => "clave3",
    "user4 " => "clave4",
    "user5 " => "clave5",
];

foreach ($usuarios as $usuario => $clave) {

    echo "Usuario: ", "<b> $usuario </b>"  . "<br>" . "Clave: ", "<b> $clave </b>" . "<br>";
}
?>