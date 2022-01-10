<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;


    class Gerente extends Funcionario implements Autenticavel{
        public function calcularBonificacao(): float{
            return $this->getSalario();
        }

        public function podeAutenticar(string $senha): bool
        {
            return $senha === '4321';
        }
    }