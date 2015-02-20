<html>

    <head>
        <title> Sinaliza - Cadastro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <?php
        session_start();
        ?>
    </head>

    <body>
        <div style="padding: 5% 5% 5% 5%;">
            <div style="width: 45%; float: left; padding-right: 7%">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3>Novo Aluno</h3>
                    </div>
                    <form action = "../logic/novoaluno.php" method="post">
                        <div class="panel-body" style="padding-bottom: 5%">
                            <h4>Nome:</h4>
                            <input type="text" name="nome" class="form-control" placeholder="" aria-describedby="basic-addon1">
                            <h4>Email:</h4>
                            <input type="text" name="email" class="form-control" placeholder="" aria-describedby="basic-addon1">
                            <h4>Senha:</h4>
                            <input type="password" name="senha" class="form-control" placeholder="" aria-describedby="basic-addon1">
                            <div style="padding-top: 5%">
                                <p style="font-size: 1.5em"><input type="checkbox" name="check"> Li e aceito todos os termos de uso.</p>
                            </div>
                            <?php

                            if (isset($_SESSION['erro_cadastro'])) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <span class="sr-only">Erro:</span>
                                    <?php echo $_SESSION['erro_cadastro']; ?>
                                </div>
                                    <?php
                                }
                                ?>
                        </div>

                        <div class="panel-footer" style="padding-bottom: 10%">
                            <a href="index.php"><button type="button" class="btn btn-default" style="width: 45%; float: left"> Cancelar </button></a>
                            <button type="submit" class="btn btn-default" style="width: 45%; float: right"> Cadastrar-se </button>
                        </div>
                    </form>
                </div>
            </div>
            <div style="width: 45%; float: right; padding-right: 7%">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3>Termos de uso</h3>
                    </div>
                    <div class="panel-body" style="padding-bottom: 5%">
                        <textarea style="height: 52%; width: 100%; text-align: justify; background-color: white" disabled=>

1. É dever do aluno...
2. O site não compromete em...
3. Não será permitido...
    3.1 Do site
    3.2 Do Aluno
4. Blablabla
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>