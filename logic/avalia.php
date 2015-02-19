<?php
	require_once "../model/teste.php";
	session_start();
	$teste =  unserialize($_SESSION['teste']);
	$acertos = 0;
	$i = 1;

	foreach ($teste->getQuestoes() as $questao) {
		if($questao['resp'] == $_POST['q'.$i++]){
			$acertos++;
		}
	}

	echo $acertos;
?>