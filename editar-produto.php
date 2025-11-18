<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Hanahaki - Editar Produto</title>
</head>
<body>
    <main>
        <section class="container-admin-banner">
            <h1>Editar Produto</h1>
        </section>

        <section class="container-form">
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto" required>

                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" placeholder="Digite a descrição do produto" required>

                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" placeholder="Digite o preço do produto">

                <label for="imagem">Atualizar imagem do produto</label>
                <input type="file" name="imagem" id="imagem" accept="image/*">

                <input type="submit" name="editar" class="botao-cadastrar">
            </form>
        </section>
    </main>
</body>
</html>
