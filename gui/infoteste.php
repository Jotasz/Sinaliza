<html>

    <head>
        <title> Sinaliza - Teste</title>
        <meta http-equiv="Content-Type" content="text/html; charset =utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/elements.css" />
    </head>

    <body>
        
        <?php
            require "../gui/upbar.php"; 
        	require_once '../infra/DAO.php';
            session_start();
        	DAO::connect();
            $modulo = $_POST['modulo'];
        	$modNome = DAO::getModNome($modulo);
            $status =  DAO::checaAprovacao($_SESSION['email'], $modulo);
            $media =  DAO::getMediaNota($modulo);
        ?>
        
        <div style="margin-left: 3%; margin-right: 3%">
            <h2><?php echo $modNome;?></h2>
                <div class="panel panel-default" style="height: 30%">
                    <div class="panel-body">
                        <h4>- Nº de Questões: <?php echo ($modulo < 6) ? "10" : "40"; ?></h4>
                        <h4>- Você realizou esse teste <?php echo $status['vezes']; ?> vez(es).</h4>
                        <h4>- Média de Acerto Geral: <?php echo ($media) ? round($media)."%" : "--"; ?> </h4>
                        <?php if($modulo < 6){?>
                            <h4>- Você <?php echo ($status['aprovado']) ? "JÁ" : "AINDA NÃO"; ?> foi aprovado nesse teste.</h4>
                        <?php }?>
                        <form action="teste_gui.php" method="post">
                        	<input type="hidden" name="modulo" value=<?php echo $modulo;?>>
                        	<input type="submit" value="Iniciar" <?php echo ($status['aprovado'] and ($modulo < 6)) ? "disabled" : "";?> class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">
                            <a href="main.php">
                                <button type="button" class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">Cancelar</button>
                            </a>
                        </form>
                     </div>
                 </div>
        </div>
        </body>

</html>