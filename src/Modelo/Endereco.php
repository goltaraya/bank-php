<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 * 
 * @property-write string $cidade  
 * @property-write string $bairro
 * @property-write string $rua 
 * @property-write string $numero 
 */

 final class Endereco
{

    use AcessoPropriedades;

    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return $this->recuperaRua()
            . ", "
            . $this->recuperaNumero()
            . ", "
            . $this->recuperaBairro()
            . ", "
            . $this->recuperaCidade()
            . PHP_EOL;
    }

    public function __set(string $nomeAtributo, string $novoAtributo)
    {
        $metodo = "set" . ucfirst($nomeAtributo);
        return $this->$metodo($novoAtributo);
    }

    private function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }
 
    private function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }
 
    private function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }
 
    private function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}
