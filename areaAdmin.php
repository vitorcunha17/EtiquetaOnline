<html>
    <head>
        <meta charset="UTF-8">
        <title>Área de Administração</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
    <center>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Cadastrar Serviço Realizado</a></li>
                <li><a href="#">Visualizar Agendamento</a></li>
                <li><a href="#">Clientes Cadastrados</a></li>
            </ul>
        </nav>
    </center>
    <div id="caixaServicos">
        <div id="formularioServico">
            <form action="processamento/processamento.php" method="POST">
                <table id="servicosTable">
                    <tr>
                        <td>Data: </td>
                        <td><input type="text" name="data" class="form-control" id="data" required="true" /></td>
                    </tr>
                    <tr>
                        <td>Óleo: </td>
                        <td><input type="text" name="oleo" class="form-control" id="oleo" required="true" /></td>
                    </tr>
                    <tr>
                        <td>Km: </td>
                        <td><input type="text" name="km" class="form-control" id="km" required="true"/></td>
                    </tr>
                    <tr>
                        <td>Próxima Troca: </td>
                        <td><input type="text" name="proximatroca" class="form-control" id="proximatroca" required="true"/></td>
                    </tr>
                    <tr>
                        <td>Filtro de Óleo: </td>
                        <td><input type="text" name="filtroO" class="form-control" id="filtroO" required="true"/></td>
                    </tr>
                    <tr>
                        <td>Filtro de Combustível: </td>
                        <td><input type="text" name="filtroC" class="form-control" id="filtroC" required="true"/></td>
                    </tr>
                    <tr>
                        <td>Filtro de Ar: </td>
                        <td><input type="text" name="filtroA" class="form-control" id="filtroA" required="true"/></td>
                    </tr>
                    <tr>
                        <td>Filtro de Cabine: </td>
                        <td><input type="text" name="filtroCa" class="form-control" id="filtroCa" required="true"/></td>
                    </tr>
                    <tr>
                        <td>Observações e Avarias: </td>
                        <td><textarea class="form-control" id="obs"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="action" class="btn btn-primary" value="Cadastrar Serviço" id="btCadastrar"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>