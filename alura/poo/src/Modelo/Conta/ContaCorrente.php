<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta{

    protected function percentualTarifa():float{
        return 0.05;
    }
    public function transferir (float $valor, Conta $contaDestino): string{
        if ($valor > $this->saldo) return "Saldo indisponivel";
        $this->sacar($valor);
        $contaDestino->depositar($valor);
        return "transferencia efetuada com sucesso, seu novo saldo é: ". $this->getSaldo(); 
    }

}