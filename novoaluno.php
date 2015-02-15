<!DOCTYPE html>
<html>
	<?php require "DAO.php"; ?>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<?php
		DAO::connect();
		$msg = DAO::novoAluno($_POST["nome"], $_POST["email"], $_POST["senha"]);
		if(isset($msg)){
			echo $msg;
		}else{
			header("Location: index.php");
			exit();
		}
	?>
</body>
</html>