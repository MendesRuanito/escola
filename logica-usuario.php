<?php

session_start();

function verificaUsuario()
{
    if (!usuarioEstaLogado()) {
        header("Location: index.php?login=1");
        die();
    }
}

function usuarioEstaLogado()
{
    return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado()
{
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email)
{
    return $_SESSION["usuario_logado"] = $email;
}

function logout()
{
    session_destroy();
    session_start();
}
