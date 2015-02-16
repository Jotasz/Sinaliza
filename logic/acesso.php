<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
    </head>
    <body>
        <?php
        require_once "../infra/DAO.php";
        session_start();

        DAO::connect();

        if (DAO::validaLogin($_POST["email"], $_POST["senha"])) {
            $_SESSION['email'] = $_POST["email"]; 
            header("Location: ../gui/main.php");
        } else {
            header("Location: ../index.php");
        }
        
        ?>
    </body>
</html>

