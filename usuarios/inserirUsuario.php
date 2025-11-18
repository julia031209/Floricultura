<?php
    require_once __DIR__ . '/src/conexao-bd.php';
    require_once __DIR__ . '/src/Repositorio/UsuarioRepositorio.php';
    require_once __DIR__ . '/src/Modelo/Usuario.php';

    $email = 'teste@exemplo.com';
    $senha = '1234';

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $repo = new UsuarioRepositorio($pdo);

    if($repo->buscarPorEmail($email))
    {
        echo "Usuario já existe! {$email}\n";
        exit;
    }

    $repo->salvar(new Usuario(0, $email, $senha));
    

    echo "Usuário inserido: {$email}\n";
?>