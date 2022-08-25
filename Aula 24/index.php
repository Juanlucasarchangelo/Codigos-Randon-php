<?php
$arrayFunc = array("juan", "Flavio", "Maria", "Mabilly", "Amanda", "Jorge");
$nome = "";
$email = "";
$funcionario = "";

if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
}

if(isset($_POST["email"])){
    $email = $_POST["email"];
}

if(isset($_POST["func"])){
    $funcionario = $arrayFunc[$_POST["func"]];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul, li{
            list-style: none;
        }
        input, select{
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <li>Nome: <input type="text" name="nome"></li>
        <li>E-mail: <input type="text" name="email"></li>
        <li>Funcionário:
            <select name="func">
            <?php
                for($i = 0; $i < count($arrayFunc); $i++){
            ?>
                <option value="<?= $i; ?>"> <?=$arrayFunc[$i];?> </option>";
            <?php
                }
            ?>
            </select>
        </li>
        <li><input type="submit" name="submit" value="Cadasatrar"></li>
    </form>
    <h1>Valores inseridos</h1>
    <h4>Nome: <?= $nome?></h4>
    <h4>E-mail: <?= $email?></h4>
    <h4>Funcionario: <?= $funcionario?></h4>
</body>
</html>
