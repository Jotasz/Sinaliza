<?php

session_start();

require_once "../infra/DAO.php";
require_once "../model/aluno.php";

DAO::connect();

$aluno = new Aluno($_POST["nome"], $_POST["email"], $_POST["senha"]);

$msg = DAO::novoAluno($aluno);
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