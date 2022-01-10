<?php
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha))
        {
            echo "Usuario logado no sistema";
        } else { echo "ops, senha incorreta";}
            
      
    }
}
