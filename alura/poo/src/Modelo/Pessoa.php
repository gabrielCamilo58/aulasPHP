<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa {
    private $nome;
    private $cpf;

    use AcessoPropriedades;
    
    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome():string{
        return $this->nome;
    }
    public function getCPF(): string{
        return $this->cpf->getNumero();
    }

}