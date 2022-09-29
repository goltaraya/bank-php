<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valor): void
    {
        if ($valor <= 0) {
            echo "Valor deve ser maior que R$00" . PHP_EOL;
            return;
        }
        $this->salario += $valor;
    }

    abstract public function calculaBonificacao(): float;
}
