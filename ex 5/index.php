<?php

$operaArray = array("Multiplicação", "Divisão", "Subtração", "Adição");

$num1 = null;
$num2 = null;
$operacao = null;
$result = null;

if(isset($_POST["num1"])){
  $num1 = $_POST["num1"];
}

if(isset($_POST["num2"])){
  $num2 = $_POST["num2"];
}

if(isset($_POST["operacao"])){
  $operacao = $_POST["operacao"];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator - Prototipo</title>
</head>
<body>
  <form method="POST">
    <label name="num1">Primeiro número:</label>
    <input type="number" name="num1" placeholder="Primeiro número...">
    <label name="num2">Segundo número:</label>
    <input type="number" name="num2" placeholder="Segundo número...">
    <select name="operacao">
      <?php
        for($i = 0; $i < count($operaArray); $i++){
      ?>
        <option value="<?= $i ?>"><?= $operaArray[$i]?></option>
      <?php
        }
      ?>
    </select>
    <input type="submit" name="submit" value="ENVIAR">
  </form>
  <h1>Resultado da equação</h1>
  <?php
  if($operacao == 0){
    // var_dump($operacao);
    echo "O resultado é: " . $result = $num1 * $num2. ", obrigado por usar nosso sistema.";
  } else if($operacao == 1){
    // var_dump($operacao);
    echo "O resultado é: " . $result = $num1 / $num2. ", obrigado por usar nosso sistema.";
  } else if($operacao == 2){
    // var_dump($operacao);
    echo "O resultado é: " . $result = $num1 - $num2. ", obrigado por usar nosso sistema.";
  } else {
    // var_dump($operacao);
    echo "O resultado é: " . $result = $num1 + $num2. ", obrigado por usar nosso sistema.";
  }
  ?>
</body>
</html>