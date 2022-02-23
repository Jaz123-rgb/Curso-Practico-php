<?php


function concatenar($nombre, $apellido){
    echo "Su nombre es $nombre y su apellido $apellido" . "\n";

}
concatenar("Jaziel","Perez");

function sumarNum($numeros){
    $suma = 0;
for ($i=0; $i < 5 ; $i++) { 
    $suma = $suma + $numeros[$i];
}
echo "La suma de los numeros es: $suma" . "\n";

}

$numeros = array(1,2,3,4,5);
sumarNum($numeros)

?>

