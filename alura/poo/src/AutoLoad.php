<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoDoArquivo = str_replace('Alura\\Banco', 'src',$nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\', '/', $caminhoDoArquivo);
    $caminhoDoArquivo .='.php';
    require_once $caminhoDoArquivo;
});
