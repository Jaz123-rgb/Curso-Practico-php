<?php

$valorA = true;
$valorB = false;

$resultado = $valorA && $valorB;
var_dump($resultado);  

// OPERADOR OR ||

$resultado = $valorB || $valorB;

var_dump($resultado);

//Operdaor XOR 

$resultado = $valorA xor $valorB;
var_dump($resultado); 

//OPREADOR DE NEGACION 
$resultado = !$valorB;
var_dump($resultado);

?>