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
<nav class="navbar navbar-inverse navbar-collapse sticky-top navbar-expand-sm navbar-dark" style="background-color: #339966;" >
			<div class="container">
				<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
						<?php if (usuarioEstaLogado()) {?>
							<button class="btn btn-outline-light dropdown-toggle btn-sm py-0" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Olá <?=usuarioLogado()?>!
							</button>
            </li>
        </ul>
    </div>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="logout.php">Sair</a>
				</div>
			<?php } ?>
			<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
	        <ul class="navbar-nav mr-auto">
	            <li class="nav-item active">
	                <a class="nav-link" href="index.php">Inicio</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="aluno-formulario.php">Cadastro</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="aluno-busca.php">Pesquisa</a>
	            </li>
	        </ul>
	    </div>
	    <div class="navbar-brand order-3">
	        <button class="btn btn-outline-light navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
						<span class="navbar-toggler-icon"></span>
					</button>
</div>
</nav>

	<div class="container">
		<div class="principal">
