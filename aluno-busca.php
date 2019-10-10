<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-categoria.php");
require_once("banco-aluno.php");
require_once("logica-usuario.php");

verificaUsuario();

?>
<h1>Busca</h1>

<form action="aluno-lista.php" method="get">
	<table class="table">
		<tr>
			<td>Tipo:</td>
			<td>
				<select name="tipo" class="form-control">
					<option value=0>
						Id
					</option>
					<option value=1>
						Nome
					</option>
					<option value=2>
						Categoria
					</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Valor:</td>
			<td><input class="form-control" type="text" name="valor" /></td>
		</tr>
		<tr>
			<td class="align-center">
				<button class="btn btn-primary" type="submit" value="busca">Pesquisar</button>
			</td>
		</tr>
	</table>
</form>
