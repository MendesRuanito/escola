<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
?>

<h1>Bem Vindo!</h1>

<?php
        if (usuarioEstaLogado()) {
            ?>
						<br>

						 <div class="row">
							 <a href="aluno-formulario.php" class="col-md-auto">
						<div class="menu" style="text-align: center">
						<img src="img/Index/computer.svg" class="rounded mx-auto  d-block" width="128px" alt="...">
						<br>
						<font size="6px">Cadastro</font>
					</div>
				</a>
				 <a href="aluno-lista.php" class="col-md-auto">
					<div class="menu" style="text-align: center">
						<img src="img/Index/research-1.svg" class="rounded mx-auto d-block" width="128px" alt="...">
						<br>
						<font size="6px">Lista</font>
					</div>
				</a>
				<a href="aluno-busca.php" class="col-md-auto">
					<div class="menu" style="text-align: center">
						<img src="img/Index/research.svg" class="rounded mx-auto d-block" width="128px" alt="...">
						<br>
						<font size="6px">Pesquisa</font>
					</div>
					<a/>
					</div>
					<br>
					<br>

						<?php
        } else {
            if (isset($_GET['login']) && $_GET['login']==0) { ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Email e/ou Senha incorretos!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
<?php }
            if (isset($_GET['login']) && $_GET['login']==1) { ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Esta operação necessita de um login!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php } ?>
<h2>Login</h2><br>
<form action="login.php" method="post">
	<table class="table">
		<tr>
			<td>Email</td>
			<td><input class="form-control" type="email" name="email"></td>
		</tr>
		 <tr>
			<td>Senha</td>
			<td><input class="form-control" type="password" name="senha"></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary">Login</button></td>
		</tr>
	</table>
</form>

<?php
        }
require_once("rodape.php"); ?>
<script>
		document.getElementById('inicio').classList.add('active'); // Adiciona classe
		document.getElementById('cad').classList.remove('active'); // Adiciona classe
		document.getElementById('pes').classList.remove('active'); // Adiciona classe
		document.getElementById('lis').classList.remove('active'); // Adiciona classe
</script>
