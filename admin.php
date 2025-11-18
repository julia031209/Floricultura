<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: login.php');
    }
    $usuarioLogado = $_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Admin</title>
</head>

<body>

    <header>
        <div class="logo">
            Floricultura <br><strong>HANAHAKI</strong>
        </div>
        <nav>
            <a href="index.php">Início</a>
            <a href="index.php">Produtos</a>
            <a href="login.php" class="login-button">Fazer login</a>
        </nav>
    </header>
    
    <main>
        <section class="container-topo">
            <div class="topo-direita">
                <p>Bem-vindo, <strong><?php echo htmlspecialchars($usuarioLogado); ?></strong>!</p>
                <form action="logout.php" method="POST">
                    <button type="submit" class="botao-sair">Sair</button>
                </form>
            </div>
            <div class="conteudo">
                <h2>Painel Administrativo</h2>
                <p>Conteúdo protegido aqui</p>
            </div>
        </section>

        <section class="container-admin-banner">
            <h1>Administração Hanahaki</h1>
        </section>
        <h2>Lista de Produtos</h2>
        <section class="container-table">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th colspan="2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Flores baadad</td>
                        <td>Suspiros de Roxo</td>
                        <td>R$ 250,99</td>
                        <td><a class="botao-editar" href="editar-produto.html">Editar</a></td>
                        <td>
                            <form>
                                <input class="botao-excluir" type="button" value="Excluir">
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>Flores adsdadasd</td>
                        <td>Hortênsias e rosas brancas</td>
                        <td>R$ 200,99</td>
                        <td><a class="botao-editar" href="editar-produto.html">Editar</a></td>
                        <td>
                            <form>
                                <input class="botao-excluir" type="button" value="Excluir">
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>Flores adsadsadsad</td>
                        <td>flores roxas</td>
                        <td>R$ 259,99</td>
                        <td><a class="botao-editar" href="editar-produto.html">Editar</a></td>
                        <td>
                            <form>
                                <input class="botao-excluir" type="button" value="Excluir">
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>Flores adasdad</td>
                        <td>flores vermelhas</td>
                        <td>R$ 249,99</td>
                        <td><a class="botao-editar" href="editar-produto.html">Editar</a></td>
                        <td>
                            <form>
                                <input class="botao-excluir" type="button" value="Excluir">
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
            <a class="botao-cadastrar" href="cadastrar-produto.html">Cadastrar produto</a>
            <form action="#" method="post">
                <input type="submit" class="botao-cadastrar" value="Baixar relatório">
            </form>

        </section>

    </main>

</body>

</html>
