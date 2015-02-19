<?php
	require_once "../model/teste.php";
	require_once "../infra/DAO.php";
	session_start();
	$teste =  unserialize($_SESSION['teste']);
	$acertos = 0;
	$i = 1;

	foreach ($teste->getQuestoes() as $questao) {
		if($questao['resp'] == $_POST['q'.$i++]){
			$acertos++;
		}
	}
	$porcento = ($acertos*100)/count($teste->getQuestoes());
	$teste->setNota($porcento);
	DAO::connect();
	DAO::computaTeste($_SESSION['email'],$teste);
?>

<html>

	<head>
        <title> Sinaliza - Resultado</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/elements.css" />
    </head>

    <body>
    <center>
    <div class="jumbotron">
  		<h1>
  			<?php 
    			if($porcento >= 70){
    				echo "<h2>Parabéns, você foi aprovado! Você acertou ".$porcento."% das questões!</h2>"; 
    			}else{
    				echo "<h2>Que pena, você não foi aprovado. Você só acertou ".$porcento."% das questões.</h2>";
    			}
    		?>
  		</h1>
  		<p>A nota de aprovação é 70%.</p>
  		<br><a href="../gui/main.php"><button class="btn btn-default" style="width: 10%">Ok</button></a>
	</div>
    </center>
    </body>

</html>
