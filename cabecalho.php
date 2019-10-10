<html>

<head>
	<title>Escola Elmano Lauffer Leal</title>
	<meta charset="utf-8">
	<link rel="icon" href="https://newtoncruzoficial.com/wp-content/uploads/2018/08/cropped-book-favicon-512-1.png" sizes="32x32">
	<link href="css/escola.css" rel="stylesheet">
	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/ajax/lib/ajax.js"></script>

	<?php require_once("logica-usuario.php");?>

</head>

<body>
	<div class="navbar sticky-top navbar-expand-sm navbar-dark nav-pills bg-dark">
		<div class="container">
			<div class="navbar-header">
				<img src="https://newtoncruzoficial.com/wp-content/uploads/2018/08/cropped-book-favicon-512-1.png" width="30" height="30" class="d-inline-block align-top" alt="" style="margin-top: 8px;">
				<a class="navbar-brand" href="index.php">Escola Elmano Lauffer Leal</a>
			</div>
			<div class="navbar-nav">

				<ul class="navbar navbar-nav">

					<li><a class="nav-link" href="aluno-formulario.php">Cadastro</a></li>

					<li><a class="nav-link" href="aluno-lista.php">Lista</a></li>

					<li><a class="nav-link" href="aluno-busca.php">Busca</a></li>

					<?php if(usuarioEstaLogado()){?>
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Olá <?=usuarioLogado()?>!
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="logout.php">Sair</a>
						</div>
					</div>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">
