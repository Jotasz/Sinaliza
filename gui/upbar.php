<!-- UP BAR -->
<?php 
    session_start();
    if(isset($_SESSION['email']) and isset($_SESSION['nome_aluno'])){?>
	    <div class="alert alert-success" style="margin-bottom: 5%; font-size: 1.3em">
	    	Olá <?php echo $_SESSION['nome_aluno']; ?>
		    <a style="float: right; padding-left: 2%" href="../util/sair.php"> Sair</a>
		    <a style="float: right" href="../gui/userinfos.php"> Meu Perfil  </a>
		</div>
    <?php
    }else{
    	$_SESSION['from'] = "inside_page";
        header("Location: ../index.php");
    }
?>
