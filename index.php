<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
?>

<h1>Bem Vindo!</h1>

<?php
if (usuarioEstaLogado()) {
    ?>
	<div class="row">
	  <div  id="divlink" class="column" onclick="window.location='aluno-formulario.php';">
			<img src="img/Index/computer.svg" width="128px" alt="...">
	    <h2>Cadastro</h2>
	  </div>
	  <div id="divlink" class="column" onclick="window.location='aluno-lista.php';">
	  	<img src="img/Index/research-1.svg" width="128px" alt="...">
			<h2>Lista</h2>
	  </div>
	  <div id="divlink" class="column" onclick="window.location='aluno-busca.php';">
	  	<img src="img/Index/research.svg" width="128px" alt="...">
			<h2>Pesquisa</h2>
	  </div>
	</div>
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
		<div class="login">
<h2>Login</h2><br>
<form class="formlogin" action="login.php" method="post">
			<input class="form-control" placeholder="E-Mail" type="email" name="email"></td>
			<br>
			<input class="form-control" placeholder="Senha" type="password" name="senha"></td>
			<br>
			<td class="text-center"><button class="btn btn-primary">Login</button></td>
</form>
</div>
<?php
    }
require_once("rodape.php"); ?>
<script>
		document.getElementById('inicio').classList.add('active'); // Adiciona classe
		document.getElementById('cad').classList.remove('active'); // Adiciona classe
		document.getElementById('pes').classList.remove('active'); // Adiciona classe
		document.getElementById('lis').classList.remove('active'); // Adiciona classe
</script>
