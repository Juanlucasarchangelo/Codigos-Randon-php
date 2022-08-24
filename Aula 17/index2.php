<?php

$nome = array("juan", "Lucas", "Archangelo", "Pedro", "João", "Daiane", "Mabilly");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Array</title>
</head>
<body>
    <select name="slProfessores" id="slProfessores">
        <?php
            for($i = 0; $i < count($nome); $i++){
                echo "<option value= . $i . > $nome[$i] </option>";
            }
        ?>
    </select>
    <button onclick="alert(document.getElementById(slProfessores).value);">Selecionar</button>
</body>
</html>