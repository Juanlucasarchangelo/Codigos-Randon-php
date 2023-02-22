<?php

// Get the incoming image data
$imagem = $_POST["jpg"];
$nome = $_POST["nome"];


// Remove image/jpeg from left side of image data
// and get the remaining part
$imagem = explode(";", $imagem)[1];

// Remove base64 from left side of imagem data
// and get the remaining part
$imagem = explode(",", $imagem)[1];

// Replace all spaces with plus sign (helpful for larger imagems)
$imagem = str_replace(" ", "+", $imagem);

// Convert back from base64
$imagem = base64_decode($imagem);

// Save the image as filename.jpeg
file_put_contents("assinaturas-imagem/assinatura-mail-".rand(1, 50).".jpeg", $imagem);

// Sending response back to client
echo "Done";