<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Endereco;

abstract class Conta {
    private Titular $titular;
    protected float $saldo;
    private static $contasTotal;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$contasTotal++;

    }
    public function __destruct()
    {
        self::$contasTotal--;
    }
    public function depositar (float $deposito): string{
        if ($deposito < 0) return "valor a depositar precisa ser postivo";
        $this->saldo =+ $deposito;
        return "Seu novo saldo é de: ". $this->getSaldo();

    }

    public function sacar (float $valorSacar): string{

        $tarifaDeSaque = $valorSacar * $this->percentualTarifa();
        
        echo "Tarifa de saque é de: {$tarifaDeSaque}" . PHP_EOL;
        $valorSacar = $valorSacar + $tarifaDeSaque;
        if ($valorSacar > $this->saldo) return "saldo indisponivel";
        $this->saldo -= $valorSacar;
        return "Seu novo saldo é de: ". $this->getSaldo();
    }
    public function getNome(): string{
        return $this->titular->getNome();
    }
    public function getCPF(): string{
        return $this->titular->getCPF();
    }
    public function getSaldo(): float{
        return $this->saldo;
    }
    public static function getTotalContas(){
        return self::$contasTotal;
    }
    public function getEndereco(): Endereco{
        return $this->titular->getEndereco();
    }
    abstract protected function percentualTarifa():float;
}


