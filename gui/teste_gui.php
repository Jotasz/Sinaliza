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
            session_start();
            if(isset($_SESSION["email"])){
                DAO::connect();
                $teste =  DAO::geraTeste($_SESSION["email"], $_POST["modulo"]);
            }else{
                //header("../util/erro;php");
            }
        ?>

        <div style="margin-left: 3%; margin-right: 3%">
            <center>
                <h4 style="display: inline-block; color: #F19A97">Duração Máxima: <?php echo ($_POST["modulo"] < 6) ? "10" : "40"; ?> min</h4>
            </center>
            <h4 style="display: inline-block">Questão N/<?php echo ($_POST["modulo"] < 6) ? "10" : "40"; ?> de <?php echo DAO::getModNome($_POST["modulo"]); ?></h4>
            <h4 style="display: inline-block; float: right">Hora de Início: <?php echo date("H:i"); ?></h4>
           
            <!-- LAÇO DE ESCRITA DAS QUESTÕES -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div>
                        <img src="sinal_image.png" class="panel panel-default" style="display: inline-block; height: 30%; width: 17%" />
                        <div style="display: inline-block; width:30%; width: 81%; margin-left:auto; margin-right: auto; float: right; padding: 2% 2% 2% 2%">
                            <h4 style="vertical-align: top; text-align: justify">N. jabdjahsdb ashbdja shdbjash bdjahs bdjahsbd jahsbd jahdbjashbdjahsbdajshdbjahsbdajhd jahsdb jahsbdjahsdbj ahsdb jahbdjah djhabsjdhabjsd hasbdjahsbdjhasbdjahbsdjhasbdjahs bdjs ahdbjahsdbj ahsdb ja d</h4>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="">
                                <input id="alternative" type="radio" name="resp" value="a">  a) Alternativa A.<br>
                                <input id="alternative" type="radio" name="resp" value="b">  b) Alternativa B.<br>
                                <input id="alternative" type="radio" name="resp" value="c">  c) Alternativa C.<br>
                                <input id="alternative" type="radio" name="resp" value="d">  d) Alternativa D.<br>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <button type="button" class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">Próxima/Finalizar</button>
            <a href="">
                <button type="button" class="btn btn-default" style="float: right; width: 13%; margin-left: 2%">Desistir</button>
            </a>
            <!-- FIM DO LAÇO DE ESCRITA DAS QUESTÕES -->

        </div>
    </body>

</html>