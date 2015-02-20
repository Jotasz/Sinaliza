<?php
	
	function checkCampos($nome, $email, $senha){
		if(($nome == "") or ($email == "") or ($senha == "")){
			return "Todos os campos devem ser preenchidos.";
		}
	}

?>