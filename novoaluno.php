<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<?php
	
		//echo "<h2> Novo Aluno: </h2><br>" . "<h3> Nome: " . $_POST["nome"] . "<br>Email: " . $_POST["email"] . "<br>Sehna: " . $_POST["senha"] . "<br>Check: " . (isset($_POST["check"])) ? "TRUE" : "FALSE";

		$con = new PDO("mysql:host=localhost;dbname=sinal", "root", "123456");
		$stmt = $con->prepare("INSERT INTO aluno(nome, email, senha) VALUES(?, ?, ?)");
		$stmt->bindParam(1, $_POST["nome"]);
		$stmt->bindParam(2, $_POST["email"]);
		$stmt->bindParam(3, $_POST["senha"]);
		$stmt->execute();
		
		header("Location: index.php");
		exit();
	?>
</body>
</html>