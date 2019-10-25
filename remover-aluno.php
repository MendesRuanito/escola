<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-aluno.php");

$id = $_POST["id"];
excluirAluno($connection, $id);
echo "<script>location.href='aluno-lista.php?removido=true';</script>";
exit();

?>
