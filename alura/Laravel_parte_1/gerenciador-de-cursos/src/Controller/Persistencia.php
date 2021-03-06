<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;


class persistencia 
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }
    public function processaRequisicao()
    {
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $curso = new Curso();
        $curso->setDescricao($_POST['descricao']);

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if(!is_null($id) && $id !== false){
            $curso->setId($id);
            $this->entityManager->merge($curso);
        }else{
            $this->entityManager->persist($curso);
        }
        $this->entityManager->flush();

        echo "Curso $descricao salvo com sucesso";
        header('Location: /listar-cursos');

    }
}