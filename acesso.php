<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<?php
	require "DAO.php";

	DAO::connect();

	if(DAO::validaLogin($_POST["email"], $_POST["senha"])){
		header("Location: main.php");
	}else{
		header("Location: index.php");
	}
	exit();


	?>
</body>
</html>

