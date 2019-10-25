<?php require_once('cabecalho.php');
require_once('conecta.php');
require_once('banco-aluno.php');

$id = $_POST["id"];
$nome = $_POST["nome"];
$data = $_POST["data"];
$resp = $_POST["resp"];
$categoria_id = $_POST["categoria"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];

if (alteraAluno($connection, $id, $nome, $data, $resp, $sexo, $telefone, $endereco, $categoria_id)) {
    ?><p class="alert alert-success">Aluno(a) modificado com sucesso!</p><?php
} else {
        $msg = mysqli_error($connection); ?><p class="alert alert-danger">Erro de alteração!<br>Erro: <?= $msg?></p><?php
    }
mysqli_close($connection);
require_once('rodape.php'); ?>
