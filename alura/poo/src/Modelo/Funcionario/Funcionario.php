<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

 abstract class Funcionario extends Pessoa{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
       parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }
    public function getSalario(): float{
        return $this->salario;
    }

    public function rebeceAumento(float $valorAumento): void{
        if($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calcularBonificacao(): float; 


}