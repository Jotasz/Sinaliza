<head>
    <title> Sinaliza - Teste</title>
    <meta http-equiv="Content-Type" content="text/html; charset =utf-8">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
</head>

<?php
	require "upbar.php";
	require "../infra/DAO.php";
?>

<body>
	<?php
		DAO::connect();
        $aluno = DAO::getAluno($_SESSION['email']);
        $progresso = round((($aluno->getModulo()-1)*100)/6);
	?>
	<div class="panel panel-success" style="padding: 2% 2% 2% 2%; margin: 2% 2% 2% 2%">
		<h1><?php echo $aluno->getNome();?></h1>
		<h2><?php echo "Atvido desde: ".$aluno->getData();?></h2>
		<center><h2><strong>Desempenho</strong></h2></center>
		<div class="panel panel-success" style="padding: 2% 2% 2% 2%; margin: 2% 2% 2% 2%">
			<table class="table">
				<tr>
					<th style="text-decoration: underline; color: cadetblue;">Módulos:</th>
					<th style="text-align: center">Primeiros Socorros</th>
					<th style="text-align: center">Mecânicas de Autmóveis</th>
					<th style="text-align: center">Legislação de Trânsito</th>
					<th style="text-align: center">Direção Defensiva</th>
					<th style="text-align: center">Meio Ambiente</th>
					<th style="text-align: center">Teste Final</th>
				</tr>
				<tr>
					<?php
						$status1 = DAO::checaAprovacao($aluno->getEmail(), 1);
						$status2 = DAO::checaAprovacao($aluno->getEmail(), 2);
						$status3 = DAO::checaAprovacao($aluno->getEmail(), 3);
						$status4 = DAO::checaAprovacao($aluno->getEmail(), 4);
						$status5 = DAO::checaAprovacao($aluno->getEmail(), 5);
						$status6 = DAO::checaAprovacao($aluno->getEmail(), 6);
					?>
					<th style="text-decoration: underline; color: cadetblue;">Aprovado:</th>
					<th style="text-align: center"><?php echo ($status1['aprovado']) ? "Sim" : "Não"; ?></th>
					<th style="text-align: center"><?php echo ($status2['aprovado']) ? "Sim" : "Não"; ?></th>
					<th style="text-align: center"><?php echo ($status3['aprovado']) ? "Sim" : "Não"; ?></th>
					<th style="text-align: center"><?php echo ($status4['aprovado']) ? "Sim" : "Não"; ?></th>
					<th style="text-align: center"><?php echo ($status5['aprovado']) ? "Sim" : "Não"; ?></th>
					<th style="text-align: center"><?php echo ($status6['aprovado']) ? "Sim" : "Não"; ?></th>
				</tr>
				<tr>
					<th style="text-decoration: underline; color: cadetblue;">Vezes:</th>
					<th style="text-align: center"><?php echo ($status1['vezes']) ? $status1['vezes'] : "--"; ?></th>
					<th style="text-align: center"><?php echo ($status2['vezes']) ? $status2['vezes'] : "--"; ?></th>
					<th style="text-align: center"><?php echo ($status3['vezes']) ? $status3['vezes'] : "--"; ?></th>
					<th style="text-align: center"><?php echo ($status4['vezes']) ? $status4['vezes'] : "--"; ?></th>
					<th style="text-align: center"><?php echo ($status5['vezes']) ? $status5['vezes'] : "--"; ?></th>
					<th style="text-align: center"><?php echo ($status6['vezes']) ? $status6['vezes'] : "--"; ?></th>
				</tr>
				<tr>
					<?php
						$media1 = DAO::getMediaNotaAluno($aluno->getEmail(), 1);
						$media2 = DAO::getMediaNotaAluno($aluno->getEmail(), 2);
						$media3 = DAO::getMediaNotaAluno($aluno->getEmail(), 3);
						$media4 = DAO::getMediaNotaAluno($aluno->getEmail(), 4);
						$media5 = DAO::getMediaNotaAluno($aluno->getEmail(), 5);
						$media6 = DAO::getMediaNotaAluno($aluno->getEmail(), 6);
					?>
					<th style="text-decoration: underline; color: cadetblue;">Média:</th>
					<th style="text-align: center"><?php echo ($media1) ? round($media1)."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($media2) ? round($media2)."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($media4) ? round($media3)."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($media5) ? round($media4)."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($media6) ? round($media5)."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($media6) ? round($media6)."%" : "--"; ?></th>
				</tr>
				<tr>
					<?php
						$notas1 = DAO::getNotasExtremasAluno($aluno->getEmail(), 1);
						$notas2 = DAO::getNotasExtremasAluno($aluno->getEmail(), 2);
						$notas3 = DAO::getNotasExtremasAluno($aluno->getEmail(), 3);
						$notas4 = DAO::getNotasExtremasAluno($aluno->getEmail(), 4);
						$notas5 = DAO::getNotasExtremasAluno($aluno->getEmail(), 5);
						$notas6 = DAO::getNotasExtremasAluno($aluno->getEmail(), 6);
					?>
					<th style="text-decoration: underline; color: cadetblue;">Maior Nota:</th>
					<th style="text-align: center"><?php echo ($notas1['maior'] != -1) ? round($notas1['maior'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas2['maior'] != -1) ? round($notas2['maior'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas3['maior'] != -1) ? round($notas3['maior'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas4['maior'] != -1) ? round($notas4['maior'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas5['maior'] != -1) ? round($notas5['maior'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas6['maior'] != -1) ? round($notas6['maior'])."%" : "--"; ?></th>
				</tr>
				<tr>
					<th style="text-decoration: underline; color: cadetblue;">Menor Nota:</th>
					<th style="text-align: center"><?php echo ($notas1['menor'] != -1) ? round($notas1['menor'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas2['menor'] != -1) ? round($notas2['menor'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas3['menor'] != -1) ? round($notas3['menor'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas4['menor'] != -1) ? round($notas4['menor'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas5['menor'] != -1) ? round($notas5['menor'])."%" : "--"; ?></th>
					<th style="text-align: center"><?php echo ($notas6['menor'] != -1) ? round($notas6['menor'])."%" : "--"; ?></th>
				</tr>
			</table>
		</div>
		<center><a href="main.php"><button class="btn btn-defaul" style="width: 13%">Ok</button></a></center>
	</div>
</body>