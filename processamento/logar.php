<?php
session_start();
include 'conexao.php';

class login {

    function logar($login, $senha) {
        $obj = new banco();
        $sql = "Select * from clientes where login = '$login' and senha = '$senha'";
        $row = $obj->select($sql);
        if (isset($row)){
            $_SESSION['usuarionome'] = $row['nome'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['perfil_usuario'] = array('id' => $row['id'],'nome' => $row['nome'], 'email' => $row['email'], 'usuario' => $row['usuario'], 'senha' => $row['senha']); 
            $_SESSION['logado'] = true;
        }
        else{
            $_SESSION['logado'] = false;            
        }
    }

}
?>