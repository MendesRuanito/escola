<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-aluno.php");

$nome = $_POST["nome"];
$data = $_POST["data"];
$resp = $_POST["resp"];
$sexo = $_POST["sexo"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$categoria = $_POST["categoria"];


if (cadastraAluno($connection, $nome, $data, $resp, $sexo, $telefone, $endereco, $categoria)) { ?>
	<p class="alert alert-success">Aluno cadastrado!</p>
<?php } else {
    $msg = mysqli_error($connection); ?><p class="alert alert-danger">Erro no cadastro!<br>Erro: <?= $msg?></p>
<?php }
mysqli_close($connection);
require_once("rodape.php"); ?>
