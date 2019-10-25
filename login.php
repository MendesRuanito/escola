<?php require_once('conecta.php');
require_once('banco-usuario.php');
require_once('logica-usuario.php');

$usuario = buscaUsuario($connection, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
    $_SESSION["danger"] = "Usuário Invalido";
	echo "<script>location.href='index.php?login=0';</script>";
} else {
    $_SESSION["success"] = "Usuario Logado com Sucesso";
    logaUsuario($usuario["nome"]);
    echo "<script>location.href='index.php';</script>";
}
exit;
