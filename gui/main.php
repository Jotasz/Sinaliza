<! DOCTYPE html>

<html>
    <head>
        <title> Sinaliza - Inicio</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/elements.css" />
    </head>
    <body>
        <?php 
            require_once "../infra/DAO.php";
            require_once "../model/aluno.php";
            DAO::connect();
            session_start();
            if(isset($_SESSION["email"])){
                $aluno = DAO::getAluno($_SESSION["email"]);
                $progresso = round(($aluno->getModulo()*100)/6);
            }else{
                header("../util/erro.php");
            }
        ?>
        <!-- UP BAR -->
        <div class="alert alert-success" >
            Olá <?php echo $aluno->getNome(); ?>
            <a style="float: right; padding-left: 2%" href="../util/sair.php"> Sair</a>
            <a style="float: right" href=""> Meu Perfil  </a>
        </div>


        <div style="padding: 2% 2% 2% 2%">
            <div class="panel panel-success" style="height: 70%">
                <div class="panel-heading" style="font-size: 1.5em">
                    <span style="font-size: 1.6em">Progresso:</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $progresso;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progresso;?>%;">
                            <?php echo $progresso;?>%
                        </div>
                    </div>
                    <span style="margin-right: 2%"><strong>Iniciou em:</strong> <?php echo $aluno->getData(); ?> </span>
                    <span><strong>Módulo atual:</strong> <?php echo $aluno->getModulo(); ?> </span>
                </div>

                <!--PANEL BODY-->
                <div class="panel-body"> <center>
                        <?php 
                            require_once 'nucleo.php';
                            print_mods($aluno->getModulo());
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>