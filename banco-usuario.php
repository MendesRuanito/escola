<?php
    function buscaUsuario($connection, $email, $senha)
    {
        $senhaMd5 = md5($senha);
        $query = "select * from login where email='{$email}' and senha='{$senhaMd5}'";
        $resultado = mysqli_query($connection, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }
?>