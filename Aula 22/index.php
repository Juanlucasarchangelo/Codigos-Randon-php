<?php

$salario = 2500.00;
$ajuste = 0;

//O & serve para devolver o valor atribuido dentro da função, a variavel $ajuste na linha 4
function valorAjuste($salario, &$ajuste){
    $ajuste = 300.00;
    return $salario + $ajuste;
}

$valorFinal = valorAjuste($salario, $ajuste);
echo "O meu salario final é de {$valorFinal}, e meu reajuste foi de {$ajuste}";

?>