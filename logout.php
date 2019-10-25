<?php 
	require_once("logica-usuario.php");
	logout();
	$_SESSION["success"] = "Deslogado com Sucesso";
	//header("Location: index.php");
	echo "<script>location.href='index.php';</script>";
	exit;
?>
