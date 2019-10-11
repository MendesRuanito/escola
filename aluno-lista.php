<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-aluno.php");
require_once("logica-usuario.php");

verificaUsuario();

$alunos = listaAlunos($connection);

if(array_key_exists("tipo", $_GET) && $_GET["tipo"]!=""){
	switch($_GET["tipo"]){
		case 0:
			break;
		case 1:
			 $alunos = pesquisaAlunoNome($connection, $_GET['valor']);
			break;
		case 2:
			 $alunos = pesquisaAlunoNome($connection, $_GET['valor']);
			break;
	}
}

?> <h1>Alunos</h1><br> <?php

if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){?>
<p class="alert alert-danger">Aluno excluido</p><?php
}?>

<div class="table-responsive">
	<table class="table table-striped table-bordered table-sm align-middle" style="font-size:14px;">
			<td bgcolor="#264d00" scope="col">#</th>
			<td bgcolor="#264d00" scope="col">Nome do Aluno</th>
			<td bgcolor="#264d00" scope="col">Nascimento</th>
			<td bgcolor="#264d00" scope="col">Responsável</th>
			<td bgcolor="#264d00" scope="col">Endereço</th>
			<td bgcolor="#264d00" scope="col">Categoria</th>
			<td bgcolor="#264d00" scope="col"></th>
			<td bgcolor="#264d00" scope="col"></th>
		<?php
    foreach ($alunos as $aluno):?>
		<tr>
			<td class="align-middle"><?=$aluno['id']?></td>
			<td class="align-middle"><?=$aluno['nome']?></td>
			<td class="align-middle">
				<?php
                $date = date_create($aluno['dataNascimento']);
                echo date_format($date, 'd/m/Y');
            ?>
			</td>
			<td class="align-middle"><?=$aluno['responsavel']?></td>
			<td class="align-middle"><?=$aluno['endereco']?></td>
			<td class="align-middle"><?=$aluno['cNome']?></td>
			<td class="align-middle">
				<form action="altera-aluno-formulario.php" method="post">
					<input type="hidden" name="id" value="<?=$aluno['id']?>">
					<button class="btn btn-outline-info  btn-block btn-sm" style="margin-bottom: -15px;">Alterar</button>
				</form>
			</td>
			<td class="align-middle">
				<form action="remover-aluno.php" method="post">
					<input type="hidden" name="id" value="<?=$aluno['id']?>">
					<button class="btn btn-outline-danger  btn-block btn-sm" style="margin-bottom: -15px;">Remover</button>
				</form>
			</td>
		</tr>
		<?php
    endforeach
    ?>

	</table>
</div>
<?php include("rodape.php"); ?>
