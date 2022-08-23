<?php

//Definindo constantes para a aplicação
define("min", 17);
define("max", 45);

$idade = 25;

echo 'MIM: ' . min . '<br>';
echo 'MAX: ' . max . '<br>';
echo 'IDADE: ' . $idade . '<br>';

if ($idade > min) {
    echo 'Acesso liberado...';
} else {
    echo 'Acesso negado...';
}

//Mostra a versão do  php (7.1)
echo '<br>' . PHP_VERSION;

?>