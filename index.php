<html>
    <head>
        <meta charset="UTF-8">
        <title>Etiqueta Online</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
        <div id="caixaLogin">
            <div id="formularioLogin">
                <form action="processamento/processamento.php" method="POST">
                    <table id="loginTable">
                        <tr>
                            <td class="Login">Login:</td>
                            <td><input type="text" name="login" class="form-control"  id="nome_informante" required="true"</td>
                        </tr>  
                        <tr>
                            <td class="Senha">Senha:</td>
                            <td><input type="password" name="senha" class="form-control"  id="senha" required="true"</td>
                        </tr>   
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-primary" name="action" value="Login" id="Login"/></td>
                        </tr>
                    </table>
                    <div id="cadastrolink">
                        <a href="cadastro.php">Cadastrar-se </a>
                    </div>
                    <?php
                    session_start();
                    if (isset($_SESSION['mensagem_cadastro'])) {
                        echo $_SESSION['mensagem_cadastro'];
                        unset($_SESSION['mensagem_cadastro']);
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['mensagem_login'])) {
                        echo $_SESSION['mensagem_login'];
                        unset($_SESSION['mensagem_login']);
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>