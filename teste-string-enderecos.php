<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco("São Luís", "Cohama", "Rua ABC", "10");
$outroEndereco = new Endereco("Raposa", "Itapeua", "Rua JT", "92");

$umEndereco->rua = 'Rua 10';
echo $umEndereco->rua . PHP_EOL;
