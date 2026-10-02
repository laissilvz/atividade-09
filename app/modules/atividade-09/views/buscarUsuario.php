<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buscar Usuários</title>

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
            width: 900px;
            max-width: 95%;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        .novo {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .tabela {
            width: 100%;
            border-collapse: collapse;
        }

        .tabela th,
        .tabela td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .tabela th {
            background-color: #2563eb;
            color: white;
        }

        .vazio {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Usuários cadastrados</h1>

        <a
            class="novo"
            href="/novo-usuario"
        >
            + Novo usuário
        </a>

        <?php if (empty($usuarios)): ?>

            <div class="vazio">
                Nenhum usuário cadastrado.
            </div>

        <?php else: ?>

            <table class="tabela">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Perfil</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($usuarios as $usuario): ?>

                        <tr>

                            <td>
                                <?= htmlspecialchars($usuario['idUsuario']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($usuario['nome']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($usuario['email']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($usuario['perfilAcesso']) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        <?php endif; ?>

    </div>

</body>

</html>