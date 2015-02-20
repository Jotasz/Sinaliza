<?php
	session_start();

	require_once "../infra/DAO.php";
	require_once "../model/aluno.php";
	require_once "../util/check_campos.php";

	if($msg = checkCampos($_POST['nome'], $_POST['email'], $_POST['senha'])){
		$_SESSION['erro_cadastro'] = $msg;
		header("Location: ../gui/cadastro.php");
		exit();
	}

	if(!$_POST['check']){
		$_SESSION['erro_cadastro'] = "É necessário concordar com os termos.";
		header("Location: ../gui/cadastro.php");
		exit();
	}

	DAO::connect();
	$msg = DAO::novoAluno($_POST["nome"], $_POST["email"], $_POST["senha"]);

	if (isset($msg)) {
	    $_SESSION['erro_cadastro'] = $msg;
	    header("Location: ../gui/cadastro.php");
	    exit();
	} else {
		$_SESSION['from'] = "cadastro";
	    header("Location: ../index.php");
	    exit();
	}
	
?>