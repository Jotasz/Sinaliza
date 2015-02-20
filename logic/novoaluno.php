<?php
	session_start();

	require_once "../infra/DAO.php";
	require_once "../model/aluno.php";

	DAO::connect();
	$msg = DAO::novoAluno($_POST["nome"], $_POST["email"], $_POST["senha"]);

	if (isset($msg)) {
	    $_SESSION['erro_cadastro'] = $msg;
	    header("Location: ../gui/cadastro.php");
	} else {
		$_SESSION['from'] = "cadastro";
	    header("Location: ../index.php");
	    exit();
	}
?>