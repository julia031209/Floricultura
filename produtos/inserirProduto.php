<?php
    require_once __DIR__ . '/src/conexao-bd.php';
    require_once __DIR__ . '/src/Repositorio/ProdutoRepositorio.php';
    require_once __DIR__ . '/src/Modelo/Produto.php';

    $repo = new ProdutoRepositorio($pdo);

    if($repo->buscarPorId($nome))
    {
        echo "Produto já existe! {$nome}\n";
        exit;
    }

    $repo->salvar(new Produto(0, $nome, $descricao, $valor));
    

    echo "Produto inserido: {$nome}\n";



?>