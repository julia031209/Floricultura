<?php
    class ProdutoRepositorio
    {
        private PDO $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        private function formarObjeto(array $dados): Produto
        {
            return new Produto((int)$dados['id_produto'], $dados['nome_produto'], $dados['descricao_produto'], $dados['valor_produto']);
        }

        public function buscarPorId(int $id): ?Produto
        {
            $sql = "SELECT id_produto, nome_produto, descricao_produto, valor_produto FROM tbproduto WHERE id_produto =?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $dados = $stmt->fetch();
            return $dados ? $this->formarObjeto($dados): null ;
        }

        public function autenticar(int $id):bool
        {
            $produto = $this->buscarPorId($id);
            return $produto ? $id == $produto->getId():false;
        }

        public function salvar(Produto $produto): void
        {
            $sql = "INSERT INTO tbproduto (nome_produto, descricao_produto, valor_produto) VALUES (?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $produto->getNome());
            $stmt->bindValue(2, $produto->getDescricao());
            $stmt->bindValue(3, $produto->getValor());
            $stmt->execute();
        }
    }

?>