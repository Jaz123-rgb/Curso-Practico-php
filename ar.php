<?php

function ejercicio2($num) {
    $treeLevel  = '';
    $asterisk = '*';
    for ($i = 0; $i < ($num / 2); $i++) {
        $treeLevel .= $asterisk;
        echo $treeLevel . PHP_EOL;
    }
}

ejercicio2(10);
