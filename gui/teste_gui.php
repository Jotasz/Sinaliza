<html>

    <head>
        <title> Sinaliza - Teste</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/elements.css" />
    </head>

    <body>
        <!-- UP BAR -->
        <div class="alert alert-success" style="margin-bottom: 5%" >
            Olá FULANO
            <a style="float: right; padding-left: 2%" href=""> Sair</a>
            <a style="float: right" href=""> Meu Perfil  </a>
        </div>

        <?php
            require_once "../model/aluno.php";
            require_once "../infra/DAO.php";
        ?>

        <div style="margin-left: 3%; margin-right: 3%">
            <center>
                <h4 style="display: inline-block; color: #F19A97">Duração Máxima: <?php echo ($_POST["modulo"] < 6) ? "10" : "40"; ?> min</h4>
            </center>
            <h4 style="display: inline-block"><?php echo ($_POST["modulo"] < 6) ? "10" : "40"; ?> Questões de <?php DAO::connect(); echo ($_POST["modulo"] < 6) ? DAO::getModNome($_POST["modulo"]) : "todos os módulos."; ?></h4>
            <h4 style="display: inline-block; float: right">Hora de Início: <?php echo date("H:i"); ?></h4>
           
            <!-- LAÇO DE ESCRITA DAS QUESTÕES -->
            <form action="../logic/avalia.php" method="post">
            <?php 
                session_start();
                DAO::connect();
                $teste = DAO::geraTeste($_SESSION["email"], $_POST["modulo"]);
                $i = 1;
                foreach ($teste->getQuestoes() as $questao) {
            
                    echo

                    "<div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div>
                                <img src=\"".(($questao["figura"] == NULL) ? "../sinal_image.png" : "../figs/".$questao["figura"])."\" class=\"panel panel-default\" style=\"display: inline-block; height: 30%; width: 17%\" />
                                <div style=\"display: inline-block; width:30%; width: 81%; margin-left:auto; margin-right: auto; float: right; padding: 2% 2% 2% 2%\">
                                    <h4 style=\"vertical-align: top; text-align: justify\">".$i.". ".$questao["pergunta"]."</h4>
                                </div>
                            </div>
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    
                                        <input id=\"alternative\" type=\"radio\" name=\"q".$i."\" value=\""."1"."\" checked>  a) ".$questao["alternativa1"]."<br>
                                        <input id=\"alternative\" type=\"radio\" name=\"q".$i."\" value=\""."2"."\">  b) ".$questao["alternativa2"]."<br>
                                        <input id=\"alternative\" type=\"radio\" name=\"q".$i."\" value=\""."3"."\">  c) ".$questao["alternativa3"]."<br>
                                        <input id=\"alternative\" type=\"radio\" name=\"q".$i."\" value=\""."4"."\">  d) ".$questao["alternativa4"]."<br>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>";
                    $i++;
            }
            $_SESSION['teste'] = serialize($teste);
            ?>
            <input type="submit" value="Finalizar" class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">
            <a href="main.php">
            <button type="button" class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">Desistir</button>
            </a>
            </form>
            <!-- FIM DO LAÇO DE ESCRITA DAS QUESTÕES -->

        </div>
    </body>

</html>