<?php

use Alura\Cursos\Controller\Exclusao;
use Alura\Cursos\Controller\FormularioEdicao;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCurso;
use Alura\Cursos\Controller\persistencia;

return [
    '/listar-cursos' => ListarCurso::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class
];

