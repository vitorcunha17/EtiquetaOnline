<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <script>
            function validarSenha() {
                senha = document.getElementById("senha_cadastro").value;
                senha2 = document.getElementById("senha_cadastro2").value;

                if (senha !== senha2) {
                    document.getElementById("errado").style.display = "block";
                    document.getElementById("certo").style.display = "none";
                    document.getElementById("senha_cadastro2").value = "";
                } else {
                    document.getElementById("certo").style.display = "block";
                    document.getElementById("errado").style.display = "none";
                    //document.getElementById("btCadastrar").style.display = "none";
                }
            }

            function mascara(t, mask) {
                var i = t.value.length;
                var saida = mask.substring(1, 0);
                var texto = mask.substring(i)
                if (texto.substring(0, 1) != saida) {
                    t.value += texto.substring(0, 1);
                }
            }
        </script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
        <div id="caixaCadastro">
            <div id="formularioCadastro">
                <?php
                session_start();
                if (isset($_SESSION['mensagem_senhas'])) {
                    echo $_SESSION['mensagem_senhas'];
                    unset($_SESSION['mensagem_senhas']);
                }
                ?>
                <form action="processamento/processamento.php" method="POST">
                    <table id="cadastroTable">
                        <tr>
                            <td>Nome: </td>
                            <td><input type="text" name="nome" class="form-control" id="nome_cadastro" required="true" /></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><input type="text" name="email" class="form-control" id="email_cadastro" required="true" /></td>
                        </tr>
                        <tr>
                            <td>Login: </td>
                            <td><input type="text" name="login" class="form-control" id="login_cadastro" required="true" maxlengh="10"/></td>
                        </tr>
                        <tr>
                            <td>Endereço: </td>
                            <td><input type="text" name="endereco" class="form-control" id="endereco_cadastro" required="true"/></td>
                        </tr>
                        <tr>
                            <td>Telefone: </td>
                            <td><input type="text" name="telefone" class="form-control" onkeypress="mascara(this, '## ####-####')" id="telefone_cadastro" required="true" /></td>
                        </tr>
                        <tr>
                            <td>Celular: </td>
                            <td><input type="text" name="celular" class="form-control" onkeypress="mascara(this, '## #####-####')" id="celular_cadastro" required="true" /></td>
                        </tr>
                        <tr>
                            <td>Quilometragem: </td>
                            <td><input type="text" name="km" class="form-control" id="telefone_cadastro" /></td>
                        </tr>
                        <tr>
                            <td>Senha: </td>
                            <td><input type="password" name="senha" class="form-control" id="senha_cadastro" required="true" maxlengh="10"/></td>
                        </tr>
                        <tr>
                            <td>Confirmar Senha: </td>
                            <td><input type="password" name="senha2" class="form-control" id="senha_cadastro2" required="true" maxlengh="10" onchange="validarSenha()"/></td>
                            <!--<td><a id="certo" style="display: none;">Senhas corretas.</a></td>-->
                            <td><a id="errado" style="display: none; font-size: 10px; color: red;">As senhas não estão diferentes.</a></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="action" class="btn btn-primary" value="Cadastrar" id="btCadastrar"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>

