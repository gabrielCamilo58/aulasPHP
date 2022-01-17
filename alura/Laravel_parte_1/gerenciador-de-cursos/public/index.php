<?php
require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCurso;
use Alura\Cursos\Controller\persistencia;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas))
{
    http_response_code(404);
    exit();
}
$classeControladora = $rotas[$caminho];
//se dentro de uma variavel houver um texto string com o mesmo nome de uma variavel é possivel instaciala,
//pois o PHP entende que aquele texto é o nome de uma classe e assim ele faz o processo como se fosse uma classe de verdade.
$controlador = new $classeControladora(); 
$controlador->processaRequisicao();