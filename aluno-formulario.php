<?php require_once('cabecalho.php');
require_once('conecta.php');
require_once('banco-categoria.php');
require_once('banco-aluno.php');
require_once('logica-usuario.php');

verificaUsuario();

$categorias = listaCategoria($connection);

?>

<form action="cadastra-aluno.php" method="post">
	<table class="table">
		<h1>Cadastro de Aluno</h1>
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" /></td>
		</tr>
		<tr>
			<td>Data de Nascimento:</td>
			<td><input class="form-control" type="date" name="data" /></td>
		</tr>
		<tr>
			<td>Sexo:</td>
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
			<td><input class="form-control" type="text" name="resp" /></td>
		</tr>
		<tr>
			<td>Telefone:</td>
			<td><input class="form-control" type="tel" name="telefone" /></td>
		</tr>
		<tr>
			<td>Categoria:</td>
			<td>
				<select name="categoria" class="form-control">
					<?php foreach ($categorias as $categoria):?>
						<option value="<?=$categoria['id']?>"><?=$categoria['nomeCategoria']?>
					<?php endforeach ?>
					</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Endereço</td>
			<td><input class="form-control" type="text" name="endereco" /></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit" value="Cadastrar">Cadastrar</button></td>
		</tr>
	</table>
</form>
<?php require_once('rodape.php'); ?>
<script>
		document.getElementById('inicio').classList.remove('active');
		document.getElementById('cad').classList.add('active');
		document.getElementById('pes').classList.remove('active');
		document.getElementById('lis').classList.remove('active');
</script>
