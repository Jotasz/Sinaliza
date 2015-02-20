<?php
	
	function checkCampos($nome, $email, $senha){
		if(($nome == "") or ($email == "") or ($senha == "")){
			return "Todos os campos devem ser preenchidos.";
		}
		if(!validaemail($email)){  
    		return "Preecha um email válido.";
		}
		if(strlen($nome) < 4){
			return "Seu nome deve ter no mínimo 4 caracteres.";
		}
		if(strlen($senha) < 8){
			return "Seu senha deve ter no mínimo 8 caracteres.";
		}	
	}

	function validaemail($email){
	//verifica se e-mail esta no formato correto de escrita
	if (!ereg('^([a-zA-Z0-9.-])*([@])([a-z0-9]).([a-z]{2,3})',$email)){
		return FALSE;
    }
    else{
		//Valida o dominio
		$dominio=explode('@',$email);
		if(!checkdnsrr($dominio[1],'A')){
			return FALSE;
		}
		else{
			return TRUE;
		} // Retorno true para indicar que o e-mail é valido
	}
}

?>