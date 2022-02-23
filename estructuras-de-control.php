<?php

$valorA = 10;

if($valorA == 10){
    echo"Es igual a diez" . "\n";
}else{
    echo"No es igual a 10" . "\n"; 
}
// intruscicion e while

$i = 0;

do {
    echo $i++ . "\n";

}while($i <= 10 );

//CICLO FOR Y FORECH
$arr = array(1,2,3,4);

    for($i=0; $i<4; $i++){
        echo $arr[$i] . "\n";
    } 
foreach($arr as $vaule){
    echo $vaule . "\n";
}


//CON LA INTRUSCCION SWITCH 
$valor1 = readline("escribe el numero del valor: ");
switch($valor1){
     case 1:
        echo "El valor es 1" . "\n" ;
    break;
    case 2:
        echo "El valor es 2" . "\n" ;
    break;

    case 3:
        echo "El valor es 3" . "\n";
    break;
    default:
    echo "no se econtro un valor parcido a $valor1 " . "\n";
    break; 
}


?>