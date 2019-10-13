<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
?>

<h1>Bem Vindo!</h1>

<?php
    if (usuarioEstaLogado()) {
        ?> <p class="alert alert-info">Voce está logado como <?=usuarioLogado()?>. <a href="logout.php">Deslogar</a></p><?php
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
    } ?>

<?php require_once("rodape.php"); ?>
