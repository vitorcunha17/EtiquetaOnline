<html>
    <head>
        <meta charset="UTF-8">
        <title>Agendamento</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
    <center>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Verificar Vencimento do Óleo</a></li>
                <li><a href="#">Visualizar Serviço Realizado</a></li>
                <li><a href="#">Agendamento</a></li>
            </ul>
        </nav>
    </center>
    <div id="faixa">
        <div id="verificar">
            <form action="processamento/processamento.php" method="POST">
                <table id="vrfTable">
                    <h2>Verificar vencimento do óleo</h2><br>
                    <tr>
                        <td class="kmut">Quilometragem na última troca:</td>
                        <td><input type="text" name="kmut" class="form-control"  id="kmut" required="true"</td>
                        <td>&nbsp;Km</td>
                    </tr>  
                    <tr>
                        <td class="kma">Quilometragem na atual:</td>
                        <td><input type="text" name="kma" class="form-control"  id="kma" required="true"</td>
                        <td>&nbsp;Km</td>
                    </tr>  
                    <tr>
                        <td colspan="2"><input type="submit" class="btn btn-primary" name="action" value="Verificar" id="verificar"/></td>
                    </tr>
                </table>
                <?php
                session_start();
                if (isset($_SESSION['mensagem_oleo'])) {
                    echo $_SESSION['mensagem_oleo'];
                    unset($_SESSION['mensagem_oleo']);
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>