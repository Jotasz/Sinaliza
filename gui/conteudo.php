<html>

     <head>
        <title> Sinaliza - Inicio</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
    </head>

    <body>
        <!-- UP BAR -->

        <?php
            require "../gui/upbar.php";
            require_once "../infra/DAO.php";
            DAO::connect();
            $conteudo = DAO::getConteudo($_POST["modulo"]);
        ?>

        <div style="padding: 2% 2% 2% 2%">

            <!-- TEXT-AREA CONTEUDO -->
            <div class="panel panel-success" style="display: inline-block; width: 65%">
                <div class="panel-heading">
                    <?php echo $conteudo["nome"]; ?>
                </div>
                <div class="panel-body">
                    <textarea style="background-color: white; width: 100%; height: 60%; margin: auto; text-align: justify" disabled>
<?php echo $conteudo["texto"]; ?>
                    </textarea>
                </div>
            </div>

            <!-- ÁREA DE GERENCIAMENTO -->
            <div class="panel panel-success" style="display: inline-block; float: right; padding: 1% 5% 5% 5%">
                <h4>Pular para tópico:</h4>

                <!-- DROP DOWN -->
                <div class="dropdown" style="margin-bottom: 10%">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        Tópicos
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Introdução</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tópico 1</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tópico 2</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tópico 3</a></li>
                    </ul>
                </div>                
                <a href="main.php">
                    <button class="btn btn-default" type="button" style="width: 100%; margin-bottom: 10%">Tela Principal</button>
                </a>
            </div>

        </div>
    </body>

</html>