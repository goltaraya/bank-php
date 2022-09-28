<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorDeVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$desenvolvedorYago = new Desenvolvedor(
    "Yago Alexandre",
    new CPF("031.011.321-83"),
    3000.0
);

$desenvolvedorYago->sobeNivel();

$gerenteJuliana = new Gerente(
    "Juliana Reis",
    new CPF("912.021.888-14"),
    5000.0
);

$diretorLuiz = new Diretor(
    "Luiz Fellipe",
    new CPF("123.872.011-92"),
    10000.0
);

$editorJohnny = new EditorDeVideo(
    "Johnny Carvalho",
    new CPF("943.102.942-02"),
    3000.
);

$controladorBonificacao = new ControladorDeBonificacoes();
$controladorBonificacao->adicionaBonificacoes($desenvolvedorYago);
$controladorBonificacao->adicionaBonificacoes($editorJohnny);

echo "Total de bonificações: R$" . $controladorBonificacao->recuperaTotal() . PHP_EOL;
