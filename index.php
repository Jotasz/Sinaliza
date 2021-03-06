<html>
    <head>
        <title> Sinaliza </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="css/elements.css" />
    </head>

    <body>
        <div style="padding: 5% 5% 5% 5%;">
            <div style="width: 45%; float: left">
                <p style="text-align: center"><img src="sinal_image.png"/></p>
                <h3 style="text-align: center"> Bem Vindo!</h3>
                <p style="text-align: center">
                    Esse será o Sinaliza, seu curso teórico de formação de condutores online!<br>
                    Nosso conteúdo será totalmente gratuito. Aguarde e aproveite!
                </p>
            </div>
            <div style="width: 45%; float: right; padding-right: 7%">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3>Identifique-se</h3>
                    </div>
                    <!--Parte do formulario do login -->
                    <form action = "logic/acesso.php" method="post" style="margin-bottom: 0em; height: inherit">
                        <div class="panel-body" style="padding-bottom: 5%">
                            <h4>Login:</h4>
                            <input type="text" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1"> 
                            <h4>Senha:</h4>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" aria-describedby="basic-addon1">
                        </div>
                        <div class="panel-footer" style="padding-bottom: 12%">
                            <input type="submit" value="Login" class="btn btn-default" style="width: 45%; float: right">
                            <a href="gui/cadastro.php"><input type="button" value="Cadastrar-se" class="btn btn-default" style="width: 45%; float: left"></a>
                        </div>
                    </form> 
                </div>

                 

                <?php
                session_start();
                if(isset($_SESSION['from'])){
                    if($_SESSION['from'] == "login"){
                        if(!isset($_SESSION['email'])){?>
                            <div class="alert alert-danger" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Erro:</span>
                                Email ou Senha inválidos.
                            </div>
                        <?php
                        }
                    }
                    if($_SESSION['from'] == "cadastro"){?>
                        <div class="alert alert-success" role="alert">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            <span class="sr-only">Erro:</span>
                            Cadastro realizado com sucesso!
                        </div>
                    <?php
                    }
                    if($_SESSION['from'] == "inside_page"){?>
                        <div class="alert alert-info" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Erro:</span>
                            É necessário logar-se para acessar.
                        </div>
                    <?php
                    }
                    unset($_SESSION['from']);
                }

                ?>

            </div>
        </div>
    </body>

</html>

