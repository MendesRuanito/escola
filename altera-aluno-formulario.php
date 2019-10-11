<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-categoria.php");
require_once("banco-aluno.php");

$id = $_POST['id'];
$aluno = buscaAluno($connection, $id);
$categorias = listaCategoria($connection); ?>

<h1>Alteração de Dados</h1>

<form action="altera-aluno.php" method="post">
	<input class="form-control" hidden name="id" value="<?=$aluno["id"]?>" />
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$aluno['nome']?>" /></td>
		</tr>
		<tr>
			<td>Data de Nascimento:</td>
			<td><input class="form-control" type="date" name="data" value="<?=$aluno['dataNascimento']?>" /></td>
		</tr>
		<tr>
			<td>Sexo</td>
			<td>
				<select name="sexo" class="form-control">
					<option value="m">
						Masculino
					</option>
					<option value="f">
						Feminino
					</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nome do Responsável:</td>
			<td><input class="form-control" type="text" name="resp" value="<?=$aluno['responsavel']?>" /></td>
		</tr>
		<tr>
			<td>Telefone:</td>
			<td><input class="form-control" type="tel" name="telefone" value="<?=$aluno['telefone']?>" /></td>
		</tr>
		<tr>
			<td>Categoria:</td>
			<td>
				<select name="categoria" class="form-control">
					<?php foreach($categorias as $categoria):?>
					<option value="<?=$categoria['id']?>"><?=$categoria['nome']?>
						<?php endforeach ?>
					</option>
				</select>
			</td>
		<tr>
			<td>Endereço</td>
			<td><input class="form-control" type="text" name="endereco" value="<?=$aluno['endereco']?>" /></td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit" value="Cadastrar">Alterar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
