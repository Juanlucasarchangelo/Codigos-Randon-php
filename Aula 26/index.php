<?php

class Pessoa{

    public $nome;
    public $site;

    public function falarNome(){
        echo $this->nome;
    }
    public function falarSite(){
        echo $this->site;
    }
}

$uma_pessoa = new Pessoa;

$uma_pessoa->nome = "Diego";
$uma_pessoa->site = "juanarchangelo.com.br";

$uma_pessoa->falarNome();
$uma_pessoa->falarSite();

?>