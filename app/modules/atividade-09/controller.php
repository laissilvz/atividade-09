<?php

require_once __DIR__ . '/model.php';

class UsuarioController
{
    private UsuarioModel $model;

    public function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function novoUsuario(): void
    {
        require __DIR__ . '/views/novoUsuario.php';
    }

    public function cadastrarUsuario(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /novo-usuario');
            exit();
        }

        $nome = trim($_POST['nome'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $senha = $_POST['senha'] ?? '';
        $perfilAcesso = $_POST['perfilAcesso'] ?? 'aluno';

        if ($nome === '' || $email === '' || $senha === '') {
            echo "Preencha todos os campos obrigatórios.";
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Informe um e-mail válido.";
            return;
        }

        if ($this->model->buscarPorEmail($email)) {
            echo "Já existe um usuário cadastrado com este e-mail.";
            return;
        }

        $cadastrado = $this->model->cadastrar(
            $nome,
            $email,
            $senha,
            $perfilAcesso
        );

        if ($cadastrado) {
            header('Location: /buscar-usuario');
            exit();
        }

        echo "Não foi possível cadastrar o usuário.";
    }

    public function buscarUsuario(): void
    {
        $usuarios = $this->model->buscarTodos();

        require __DIR__ . '/views/buscarUsuario.php';
    }
}