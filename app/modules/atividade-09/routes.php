<?php

require_once __DIR__ . '/controller.php';

Router::get(
    '/novo-usuario',
    [UsuarioController::class, 'novoUsuario']
);

Router::post(
    '/cadastrar-usuario',
    [UsuarioController::class, 'cadastrarUsuario']
);

Router::get(
    '/buscar-usuario',
    [UsuarioController::class, 'buscarUsuario']
);