<?php

include 'conexao.php';

class cadastro {

    function cadastrar($nome, $email, $login, $endereco, $telefone, $celular, $km, $senha) {
        $obj = new banco();
        $sql = "insert into clientes (nome, email, login, endereco, telefone, celular, km, senha) values ('$nome', '$email', '$login', '$endereco', '$telefone', '$celular', '$km', '$senha')";
        $retorno = $obj->insert($sql);
    }   
}

?>
