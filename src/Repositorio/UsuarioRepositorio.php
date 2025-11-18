<?php
    class UsuarioRepositorio
    {
        private PDO $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        private function formarObjeto(array $dados): Usuario
        {
            return new Usuario((int)$dados['id_usuario'], $dados['email_usuario'], $dados['senha_usuario']);
        }

        public function buscarPorEmail(string $email): ?Usuario
        {
            $sql = "SELECT id_usuario, email_usuario, senha_usuario FROM tbusuario WHERE email_usuario =?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->execute();
            $dados = $stmt->fetch();
            return $dados ? $this->formarObjeto($dados): null ;
        }

        public function autenticar(string $email, string $senha):bool
        {
            $usuario = $this->buscarPorEmail($email);
            return $usuario ? password_verify($senha, $usuario->getSenha()):false;
        }

        public function salvar(Usuario $usuario): void
        {
            $sql = "INSERT INTO tbusuario (email_usuario, senha_usuario) VALUES (?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario->getEmail());
            $stmt->bindValue(2, password_hash($usuario->getSenha(),PASSWORD_DEFAULT));
            $stmt->execute();
        }
    }

?>