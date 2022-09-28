<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionarioYago = new Desenvolvedor(
    "Yago Alexandre",
    new CPF("031.011.321-83"),
    "Desenvolvedor Júnior",
    3000.0
);

$gerenteJuliana = new Gerente(
    "Juliana Reis",
    new CPF("912.021.888-14"),
    "Analista Júnior",
    5000.0
);

$diretorLuiz = new Diretor(
    "Luiz Fellipe",
    new CPF("123.872.011-92"),
    "Diretor Pleno",
    10000.0
);

$controladorBonificacao = new ControladorDeBonificacoes();
$controladorBonificacao->adicionaBonificacoes($funcionarioYago);
$funcionarioYago->sobeNivel();
// $controladorBonificacao->adicionaBonificacoes($gerenteJuliana);
// $controladorBonificacao->adicionaBonificacoes($diretorLuiz);

echo "Total de bonificações: R$" . $controladorBonificacao->recuperaTotal() . PHP_EOL;
$controladorBonificacao->adicionaBonificacoes($funcionarioYago);
echo "Total de bonificações: R$" . $controladorBonificacao->recuperaTotal() . PHP_EOL;