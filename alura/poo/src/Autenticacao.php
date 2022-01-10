<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'AutoLoad.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente('Joa da Silva', new CPF('123.123.123.45'),1000);
$autenticador->tentaLogin($umDiretor, '4321');