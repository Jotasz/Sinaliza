<html>

    <head>
        <title> Sinaliza - Teste</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/elements.css" />
    </head>

    <body>
        <!-- UP BAR -->
        <div class="alert alert-success" style="margin-bottom: 5%">
            Olá FULANO
            <a style="float: right; padding-left: 2%" href=""> Sair</a>
            <a style="float: right" href=""> Meu Perfil  </a>
        </div>
        
        <?php 
        	require_once '../infra/DAO.php';
        	DAO::connect();
        	$modNome = DAO::getModNome($_POST["modulo"]);
        ?>
        
        <div style="margin-left: 3%; margin-right: 3%">
            <h2><?php echo $modNome;?></h2>
                <div class="panel panel-default" style="height: 30%">
                    <div class="panel-body">
                        <h4>- Nº de Questões: <?php echo ($_POST["modulo"] < 6) ? "10" : "40"; ?></h4>
                        <h4>- Duração Máxima: <?php echo (($_POST["modulo"] < 6) ? "10" : "40")." min"; ?></h4>
                        <h4>- Você realizou esse teste N veze.</h4>
                        <h4>- Média de Acerto: MED</h4>
                        <form action="teste_gui.php" method="post">
                        	<input type="hidden" name="modulo" value=<?php echo $_POST["modulo"];?>>
                        	<input type="submit" value="Iniciar" class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">
                        </form>
                        <a href="main.php">
                             <button type="button" class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">Cancelar</button>
                        </a>
                     </div>
                 </div>
        </div>
        </body>

</html>