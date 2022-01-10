<?php

use Alura\Banco\Modelo\Endereco;

require_once 'AutoLoad.php';


$umEndereco = new Endereco('Petropolis', 'Bairro Qualquer', 'Rua 6', '32');
$outroEndereco = new Endereco('Sao Paulo', 'Zona Leste', 'Rua 32B', '26');

echo $umEndereco . PHP_EOL;
echo $outroEndereco.PHP_EOL;

echo $umEndereco->bairro;
echo $umEndereco->cidade;

