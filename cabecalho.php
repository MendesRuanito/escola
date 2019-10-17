<html>

<head>
	<title>Escola Elmano Lauffer Leal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://newtoncruzoficial.com/wp-content/uploads/2018/08/cropped-book-favicon-512-1.png" sizes="32x32">
	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/escola.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/ajax/lib/ajax.js"></script>
	<script src="js/modal.js"></script>

	<?php require_once("logica-usuario.php");?>

</head>

<body>
<img class="banner" src="img/banner1360.png" alt="">
<nav class="navbar navbar-collapse navbar-expand-sm navbar-dark" style="background-color: #339966;" >
			<div class="container">
				<div class="navbar-collapse collapse order-0 dual-collapse2">
						<ul class="navbar-nav">
								<li class="nav-item ruan">
										<a class="nav-link py-0" id="inicio" href="index.php">Inicio</a>
								</li>
								<li class="nav-item ruan">
										<a class="nav-link py-0" id="cad" href="aluno-formulario.php">Cadastro</a>
								</li>
								<li class="nav-item ruan">
										<a class="nav-link py-0" id="pes" href="aluno-busca.php">Pesquisa</a>
								</li>
								<li class="nav-item ruan">
										<a class="nav-link py-0" id="lis" href="aluno-lista.php">Lista</a>
								</li>
								<li class="nav-item ruan">
										<a class="nav-link"></a>
								</li>
						</ul>
				</div>
				<div class="navbar-collapse collapse w-100 order-1 dual-collapse2">
			<?php if (usuarioEstaLogado()) {?>
				<ul class="navbar-nav ml-auto">
						<li>
							<button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#modalExemplo" >
								Olá <?=usuarioLogado()?>!
							</button>
						</li>
						<li class="nav-item">
								<a class="nav-link"></a>
						</li>
				</ul>
			<?php } ?>
		</div>

			<div class="navbar-brand order-3 py-0 ">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
						<span class="navbar-toggler-icon"></span>
					</button>
</div>
</nav>


<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Deseja Sair?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
				<a role="button" class="btn btn-primary" href="logout.php">Sim</a>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="principal">
