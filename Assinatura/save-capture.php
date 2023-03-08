<?php

$imagem = $_POST["jpg"];
$nome = $_POST["nome"];

$imagem = explode(";", $imagem)[1];
$imagem = explode(",", $imagem)[1];
$imagem = str_replace(" ", "+", $imagem);
$imagem = base64_decode($imagem);
file_put_contents("assinaturas-imagem/assinatura-mail-". $nome .".jpeg", $imagem);

echo "Done";