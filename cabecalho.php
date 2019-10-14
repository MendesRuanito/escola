<html>

<head>
	<title>Escola Elmano Lauffer Leal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://newtoncruzoficial.com/wp-content/uploads/2018/08/cropped-book-favicon-512-1.png" sizes="32x32">
	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/ajax/lib/ajax.js"></script>
	<script src="js/modal.js"></script>
	<link href="css/escola.css" rel="stylesheet">

	<?php require_once("logica-usuario.php");?>

</head>

<body>
<img class="banner" src="img/banner1360.png" alt="">
<nav class="navbar navbar-inverse navbar-collapse sticky-top navbar-expand-sm navbar-dark nav-pills" style="background-color: #339966;" >
		<div class="container">
			<?php if (usuarioEstaLogado()) {?>
				<button class="btn btn-outline-light dropdown-toggle btn-sm  py-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Olá <?=usuarioLogado()?>!
				</button>
				<div class="dropdown-menu py-0" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="logout.php">Sair</a>
				</div>
			<?php } ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link py-0" href="aluno-formulario.php">Cadastro</a>
			</li>
			<li class="nav-item">
				<a class="nav-link py-0" href="aluno-lista.php">Lista</a>
			</li>
			<li class="nav-item">
				<a class="nav-link py-0" href="aluno-busca.php">Busca</a>
			</li>
			<div class="d-flex flex-row-reverse bd-highlight">

		</ul>
	</div>
	</div>
</div>
</nav>

	<div class="container">
		<div class="principal">
