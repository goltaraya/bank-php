<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    "Yago Alexandre",
    new CPF("123.456.789-10"),
    1000.0
);

echo $autenticador->tentaLogin($umDiretor, "4321");
