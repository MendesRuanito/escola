<?php require_once("cabecalho.php"); 
require_once("conecta.php"); 
require_once("banco-aluno.php"); 

$id = $_POST["id"];
excluirAluno($connection, $id);
header("Location: aluno-lista.php?removido=true");
die();
