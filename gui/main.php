<! DOCTYPE html>

<html>
    <head>
        <title> Sinaliza - Inicio</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/elements.css" />
    </head>
    <body>

        <!-- UP BAR -->
        <div class="alert alert-success" >
            Olá FULANO
            <a style="float: right; padding-left: 2%" href=""> Sair</a>
            <a style="float: right" href=""> Meu Perfil  </a>
        </div>


        <div style="padding: 2% 2% 2% 2%">
            <div class="panel panel-success" style="height: 70%">
                <div class="panel-heading" style="font-size: 1.5em">
                    <span style="font-size: 1.6em">Progresso:</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <span style="margin-right: 2%"><strong>Iniciou em:</strong> dd/mm/aaaa</span>
                    <span><strong>Módulo atual:</strong> MÓDULO ATUAL</span>
                </div>

                <!--PANEL BODY-->
                <div class="panel-body"> <center>
                        <!-- MÓDULO PSO -->
                        <div id="block">
                            <p style="text-align: center"><img id="block_image" src="../icons/psocorros.png"/></p>
                            <div id="block_enable_label">
                                <p id="block_label_number"><span class="label label-success">1</span></p>
                                <p id="block_label_name">Primeiros<br>Socorros</p>
                            </div>
                            <button class="btn btn-success" id="block_button">Conteúdo <span style="float: right">&#10003</span></button>
                            <button class="btn btn-success" id="block_button">Teste <span style="float: right">&#10008</span></button>
                        </div>

                        <!-- MÓDULO MEC -->
                        <div id="block">
                            <p style="text-align: center"><img id="block_image" src="../icons/mecanica.png"/></p>
                            <div id="block_disable_label">
                                <p id="block_label_number"><span class="label label-default">2</span></p>
                                <p id="block_label_name">Mecânica de<br>Automóveis</p>
                            </div>
                            <button class="btn btn-success" disabled id="block_button">Conteúdo <span style="float: right">&#10008</span></button>
                            <button class="btn btn-success" disabled id="block_button">Teste <span style="float: right">&#10008</span></button>
                        </div>

                        <!-- MÓDULO LEG -->
                        <div id="block">
                            <p style="text-align: center"><img id="block_image" src="../icons/legislacao.png"/></p>
                            <div id="block_disable_label">
                                <p id="block_label_number"><span class="label label-default">3</span></p>
                                <p id="block_label_name">Legislação de<br>Trânsito</p>
                            </div>
                            <button class="btn btn-success" disabled id="block_button">Conteúdo <span style="float: right">&#10008</span></button>
                            <button class="btn btn-success" disabled id="block_button">Teste <span style="float: right">&#10008</span></button>
                        </div>

                        <!-- MÓDULO DIR -->
                        <div id="block">
                            <p style="text-align: center"><img id="block_image" src="../icons/ddefensiva.png"/></p>
                            <div id="block_disable_label">
                                <p id="block_label_number"><span class="label label-default">4</span></p>
                                <p id="block_label_name">Direção<br>Defensiva</p>
                            </div>
                            <button class="btn btn-success" disabled id="block_button">Conteúdo <span style="float: right">&#10008</span></button>
                            <button class="btn btn-success" disabled id="block_button">Teste <span style="float: right">&#10008</span></button>
                        </div>

                        <!-- MÓDULO MAM -->
                        <div id="block">
                            <p style="text-align: center"><img id="block_image" src="../icons/mambiente.png"/></p>
                            <div id="block_disable_label">
                                <p id="block_label_number"><span class="label label-default">5</span></p>
                                <p id="block_label_name">Meio<br>Ambiente</p>
                            </div>
                            <button class="btn btn-success" disabled id="block_button">Conteúdo <span style="float: right">&#10008</span></button>
                            <button class="btn btn-success" disabled id="block_button">Teste <span style="float: right">&#10008</span></button>
                        </div>

                        <!-- MÓDULO TFI -->
                        <div id="block">
                            <p style="text-align: center"><img id="block_image" src="../icons/aprovado.png"/></p>
                            <div id="block_disable_label">
                                <p id="block_label_number"><span class="label label-default">6</span></p>
                                <p id="block_label_name">Teste<br>Final</p>
                            </div>
                            <button class="btn btn-success" disabled id="block_button">Conteúdo <span style="float: right">&#10008</span></button>
                            <button class="btn btn-success" disabled id="block_button">Teste <span style="float: right">&#10008</span></button>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>