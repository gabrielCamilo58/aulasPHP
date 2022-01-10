<?php

require_once 'AutoLoad.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorDeVideo};



$funcionario1 = new Gerente('Viviane Calahara', new CPF ('123.123.432.21'), 3000);
$funcionario2 = new Desenvolvedor('Caleb Martinz', new CPF ('321.123.321.21'), 1000);
$funcionario2->sobeDeNivel();
$diretor = new Diretor('Vicent Calahan', new CPF('987.976.965.94'), 5000);
$controlador = new ControladorDeBonificacoes();

$editor = new EditorDeVideo('Pedro', new CPF('156.167.187.78'), 1500);
$controlador->adicionaBonificacao($funcionario1);
$controlador->adicionaBonificacao($funcionario2);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($editor);

echo $controlador->getTotalBonificacoes(); 