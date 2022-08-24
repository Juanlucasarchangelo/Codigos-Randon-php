<?php

function ajustes($a1 , $a2){
    return (($a1 * $a2) / 4);
} 

//Posso passar os parâmetros por uma váriavel
$num = 5;

//Basta inserir desta forma
$ajustes = ajustes($num, 3);

echo $ajustes;

?>