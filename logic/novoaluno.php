<?php

session_start();

require_once "../infra/DAO.php";
require_once "../model/aluno.php";

DAO::connect();
DAO::novoAluno($_POST["nome"], $_POST["email"], $_POST["senha"]);

if (isset($msg)) {
    $_SESSION['mensagem'] = $msg;
    header("Location: ../gui/cadastro.php");
} else {
    header("Location: ../index.php");
    exit();
}
?>
</body>
</html>