<?php

namespace Alura\Banco\Service;


require_once 'src\AutoLoad.php';

use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente};

class ControladorDeBonificacoes{
    private float $totalBonificacoes = 0;
    
    public function adicionaBonificacao(Funcionario $funcionario){
       $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function getTotalBonificacoes(): float{
        return $this->totalBonificacoes;
    }
}