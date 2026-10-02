<?php

require_once __DIR__ . '/../../core/database.php';

class UsuarioModel
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = iniciarPDO();
    }

    public function cadastrar(
        string $nome,
        string $email,
        string $senha,
        string $perfilAcesso = 'aluno'
    ): bool {
        $sql = "INSERT INTO usuarios 
                (nome, email, senha, perfilAcesso)
                VALUES (:nome, :email, :senha, :perfilAcesso)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => password_hash($senha, PASSWORD_DEFAULT),
            ':perfilAcesso' => $perfilAcesso
        ]);
    }

    public function buscarTodos(): array
    {
        $sql = "SELECT 
                    idUsuario,
                    nome,
                    email,
                    perfilAcesso
                FROM usuarios
                ORDER BY nome ASC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function buscarPorId(int $idUsuario): ?array
    {
        $sql = "SELECT 
                    idUsuario,
                    nome,
                    email,
                    perfilAcesso
                FROM usuarios
                WHERE idUsuario = :idUsuario";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':idUsuario' => $idUsuario
        ]);

        $usuario = $stmt->fetch();

        return $usuario ?: null;
    }

    public function buscarPorEmail(string $email): ?array
    {
        $sql = "SELECT *
                FROM usuarios
                WHERE email = :email";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':email' => $email
        ]);

        $usuario = $stmt->fetch();

        return $usuario ?: null;
    }
}