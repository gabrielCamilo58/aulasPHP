<?php
namespace Alura\Banco\Modelo\Conta;

//metodo percentaulTarifa sobrepõem o mesmo metodo na classe parent

class ContaPoupanca extends Conta{
    protected function percentualTarifa():float{
        return 0.03;
    }
}
