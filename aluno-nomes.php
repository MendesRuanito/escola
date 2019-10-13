<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-categoria.php");
require_once("banco-aluno.php");

verificaUsuario();

?>
<form action="aluno-lista.php" method="get">
    <table class="table">
        <h1>Busca de Nomes</h1>
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td class="align-center">
                <button class="btn btn-primary" type="submit" value="Cadastrar">Pesquisar</button>
            </td>
        </tr>
    </table>
</form>
