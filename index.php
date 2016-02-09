<?php

/*require_once "Pessoa.php";

$pessoa1 = new Pessoa("Cleiton", 28);
$pessoa2 = new Pessoa("Grazy",18);

echo $pessoa1->correr(50);*/


require_once "Produto.php";
require_once "Tenis.php";

$tenis = new Tenis();

if($tenis instanceof Tenis)
{
    echo "É um tipo de Tênis";
}else
{
    echo "Não é um tipo de tênis";
}


