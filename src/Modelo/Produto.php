<?php
    class Produto
    {
        private int $id;
        private string $nome;
        private string $descricao;
        private float $preco;

        public function __construct(int $id, string $nome, string $descricao, float $preco){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $decricao;
            $this->preco = $preco;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function getDescricao(): string
        {
            return $this->descricao;
        }

        public function getValor(): float
        {
            return $this->valor;
        }
    }
?>