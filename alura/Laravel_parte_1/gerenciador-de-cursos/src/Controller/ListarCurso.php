<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCurso implements InterfaceControladorRequisicao
{
    private $repositorioDeCursos;
    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao(): void
    {
        $cursos = $this->repositorioDeCursos->findAll();
        $titulo = 'Lista de cursos';
        require __DIR__ . '/../../view/cursos/Listar-cursos.php';
    }
}
