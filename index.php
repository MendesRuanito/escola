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
	    <h3>Cadastro</h3>
	  </div>
	  <div id="divlink" class="column" onclick="window.location='aluno-lista.php';">
	  	<img src="img/Index/research-1.svg" width="128px" alt="...">
			<h3>Lista</h3>
	  </div>
	  <div id="divlink" class="column" onclick="window.location='aluno-busca.php';">
	  	<img src="img/Index/research.svg" width="128px" alt="...">
			<h3>Pesquisa</h3>
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
<div class="form-wrapper">
  <form action="login.php" method="post" class="form">
    <h2>Login</h2><br>
    <div class="form-group">
      <label class="form-label" name="email" for="first">Email</label>
      <input id="first" autocomplete="off" class="form-input" name="email"  readonly onfocus="this.removeAttribute('readonly');"  type="email" />
    </div>
    <div class="form-group">
      <label class="form-label" for="last">Senha</label>
      <input id="last" autocomplete="off" class="form-input" name="senha" type="password"  readonly onfocus="this.removeAttribute('readonly');"/>
    </div>
    <div class="form-login">
      <br>
      <button class="btn btn-outline-success">Login</button>
    </div>
  </form>
</div>
<?php
    }
require_once("rodape.php"); ?>
<script>
$('input').focus(function(){
  $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function(){
  var inputValue = $(this).val();
  if ( inputValue == "" ) {
    $(this).removeClass('filled');
    $(this).parents('.form-group').removeClass('focused');
  } else {
    $(this).addClass('filled');
  }
})
		document.getElementById('inicio').classList.add('active'); // Adiciona classe
		document.getElementById('cad').classList.remove('active'); // Adiciona classe
		document.getElementById('pes').classList.remove('active'); // Adiciona classe
		document.getElementById('lis').classList.remove('active'); // Adiciona classe
</script>
