<?php

$DiasMes = [
    " Enero: 31 días",
    " Febrero: 28 o 29 días (si es año bisiesto)",
    " Marzo: 31 días",
    " Abril: 30 días",
    " Mayo: 31 días ",
    " Junio: 30 días ",
    " Julio: 31 días",
    " Agosto: 31 días",
    " Septiembre: 30 días",
    " Octubre: 31 días",
    " Noviembre: 30 días",
    " Diciembre: 31 días"
];

foreach ($DiasMes as $Mes => $Dias) {
    echo  "$Mes" +1 . "$Dias" . "<br>"; }


?>