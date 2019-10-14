<?php
function listaAlunos($connection)
{
    $alunos = array();
    $resultado = mysqli_query($connection, "select a.id, a.nome,a. dataNascimento, a.telefone, a.responsavel, a.endereco , c.nome as cNome from alunos as a join categorias as c on c.id = a.categorias_id");
    while ($aluno = mysqli_fetch_assoc($resultado)) {
        array_push($alunos, $aluno);
    }
    return $alunos;
}

function cadastraAluno($connection, $nome, $data, $responsavel, $sexo, $telefone, $endereco, $categoria)
{
    $query = "insert into alunos (nome, dataNascimento, responsavel, sexo, telefone, endereco, categorias_id) values ('{$nome}', '{$data}', '{$responsavel}','{$sexo}',{$telefone},'{$endereco}',{$categoria});";
    return mysqli_query($connection, $query);
}

function excluirAluno($connection, $id)
{
    $query = "delete from alunos where id={$id}";
    return mysqli_query($connection, $query);
}

function buscaAluno($connection, $id)
{
    $query = "select * from alunos where id = {$id}";
    $resultado = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraAluno($connection, $id, $nome, $data, $responsavel, $sexo, $telefone, $endereco, $categoria)
{
    $query = "update alunos set nome = '{$nome}', dataNascimento = '{$data}', responsavel = '{$responsavel}', sexo = '{$sexo}', telefone = '{$telefone}',endereco = '{$endereco}', categorias_id = '{$categoria}' where id = {$id};";
    return mysqli_query($connection, $query);
}

function pesquisaAluno($connection, $valor, $tipo)
{
    switch ($tipo) {
    case 0:
    $query = "select a.id, a.nome,a. dataNascimento, a.telefone, a.responsavel, a.endereco , c.nome as cNome from alunos as a join categorias as c on c.id = a.categorias_id where a.id = {$valor};";
      break;

    case 1:
    $query = "select a.id, a.nome,a. dataNascimento, a.telefone, a.responsavel, a.endereco , c.nome as cNome from alunos as a join categorias as c on c.id = a.categorias_id where a.nome like '%{$valor}%';";
      break;

      case 2:
      $query = "select a.id, a.nome,a. dataNascimento, a.telefone, a.responsavel, a.endereco , c.nome as cNome from alunos as a join categorias as c on c.id = a.categorias_id where cNome like '%{$valor}%';";
        break;
  }
    return mysqli_query($connection, $query);
}
