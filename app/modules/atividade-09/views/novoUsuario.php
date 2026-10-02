<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Novo Usuário</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 400px;
            max-width: 90%;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #2563eb;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        .link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Novo Usuário</h1>

        <form action="/cadastrar-usuario" method="POST">

            <label for="nome">Nome:</label>

            <input
                type="text"
                id="nome"
                name="nome"
                required
            >

            <label for="email">E-mail:</label>

            <input
                type="email"
                id="email"
                name="email"
                required
            >

            <label for="senha">Senha:</label>

            <input
                type="password"
                id="senha"
                name="senha"
                required
            >

            <label for="perfilAcesso">Perfil de acesso:</label>

            <select
                id="perfilAcesso"
                name="perfilAcesso"
            >
                <option value="aluno">Aluno</option>
                <option value="instrutor">Instrutor</option>
            </select>

            <button type="submit">
                Cadastrar usuário
            </button>

        </form>

        <a
            class="link"
            href="/buscar-usuario"
        >
            Ver usuários cadastrados
        </a>

    </div>

</body>

</html>