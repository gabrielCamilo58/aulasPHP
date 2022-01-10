<?php
require_once 'AutoLoad.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF,Endereco};
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco("Jaraguá", "batilda", "rua 6", '120A');
$vinicios = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaPoupanca($vinicios);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->getNome() . PHP_EOL;
echo $primeiraConta->getCPF() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;
var_dump($primeiraConta->getEndereco()) . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia);

var_dump($segundaConta);

$endereco2= new Endereco("Araguai","Monte", "Rua 7", "76B" );
$outra = new ContaCorrente(new Titular(new CPF('123'), 'Abcdefg', $endereco2));

var_dump($outra->getEndereco()) . PHP_EOL;
unset($segundaConta);
echo Conta::getTotalContas() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;
echo $outra->getSaldo() . PHP_EOL;

//$nova = new ContaPoupanca()