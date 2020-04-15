<meta charset="UTF-8">
<?php

switch ($_POST["action"]) {
    case 'Cadastrar': cadastrar($_POST["nome"], $_POST["email"], $_POST["login"], $_POST["endereco"], $_POST["telefone"], $_POST["celular"], $_POST["km"], $_POST["senha"], $_POST["senha2"]);
        break;
    case 'Login': logar($_POST["login"], $_POST["senha"]);
        break;
    case 'Verificar': verificar($_POST["kmut"], $_POST["kma"]);
        break;
        
}

function cadastrar($nome, $email, $login, $endereco, $telefone, $celular, $km, $senha, $senha2) {
    if ($senha == $senha2) {
        include 'Cadastro.php';
        $obj = new cadastro();
        $retorno = $obj->cadastrar($nome, $email, $login, $endereco, $telefone, $celular, $km, $senha);
        $_SESSION['mensagem_cadastro'] = "Cadastro efetuado com sucesso!";
        header("Location: ../index.php");
    } else {
        header("Location: ../cadastro.php");
        $_SESSION['mensagem_senhas'] = "Senhas Diferentes!";
    }
}

function logar($login, $senha) {
    include 'logar.php';
    $obj = new login();
    $retorno = $obj->logar($login, $senha);
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == TRUE) {
        header("Location: ../agendamento.php");
    } else {
        $_SESSION['mensagem_login'] = "Login ou senha incorretos!";
        header("Location: ../index.php");
    }
    //Login e Senha da Área de administração
    if ($login == 'admin' && $senha == 'admin'){
        header("Location: ../areaAdmin.php");
    }
}

function verificar($kmut, $kma){
    if($kmut + 5000 >= $kma){
        $_SESSION['mensagem_oleo'] = "É necessário agendar uma troca de óleo";
        header("Location: ../agendamento.php");
    }
 else {
     $_SESSION['mensagem_oleo'] = "Ainda não é necessário agendar uma troca";
     header("Location: ../agendamento.php");
    }
}

?>