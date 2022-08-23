<?php

$idade = 19;
$user = 'zudokan';
$pass = 1234;
$acesso = 0;

//Posso usar mais de um parãmetro de comparação no if
if ($user == "zudokan" && $pass == 1234) {
    $acesso++;
    echo 'Acesso liberado...';
    if($acesso == true){
        echo 'Seja bem vindo ' . $user . '. Estava te esperando para tomar um café!';
    }
} else {
    echo 'Acesso negado... Faça um cadastro.';
}

?>