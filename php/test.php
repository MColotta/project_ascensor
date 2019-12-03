<?php 
include_once 'array.php';

$peoples = []; 
array_push($peoples, 100, 52, 84, 60, 55);

function controlElevator($arr){
    if (totalArr($arr) > 300 || countArr($arr) > 4){
        echo "encender alarma";
    }else{
        echo "no funciona";
    }
}

controlElevator($peoples);

//mandando frula
/* function prueba($peoples){
    $cuenta1 = countArr($peoples);
    $cuenta2 = totalArr($cuenta);
    return $cuenta2;
}

print_r(prueba($peoples)); */
?>