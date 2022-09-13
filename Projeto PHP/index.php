<?php

require "Class-Pessoa.php";
require "Class-Programador.php";

$programador = new Programador("Juan", "PHP");

echo $programador->getNome();

//Chamando constantes
echo $programador::ESPECIE;


?>