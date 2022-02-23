<?php

$edad = readline("inserta tu edad:". " ");

if($edad < 5){
echo "tu edad es $edad tu lugar esta abajo". "\n";
}elseif($edad >= 5 && $edad <= 7){
    echo "tu edad es $edad tu lugar esta en medio". "\n";
}elseif($edad > 7){
    echo "tu edad es $edad tu lugar esta arriba". "\n";
}else{
    echo"tu edad no esta registrada". "\n";
}

