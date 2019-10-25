<?php require_once("logica-usuario.php");

logout();

$_SESSION["success"] = "Deslogado com Sucesso";
echo "<script>location.href='index.php';</script>";
die();
