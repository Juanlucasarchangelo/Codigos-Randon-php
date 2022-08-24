<?php

function Ola($nome = "juan", $email = "jlarchangelo@outlook.com"){
    return "Olá mundo, meu nome é {$nome}, e meu e-mail é {$email}";
} 

$f = Ola();

echo $f;

?>