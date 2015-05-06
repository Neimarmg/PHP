<?php
	require "validacao.php";
	// verifica se as informações vieram 
	// através do método POST
	if(isset($_POST))
	{

		// chamada da classe para instância
		include "classes/Usuario.class.php";
		include "classes/UsuarioDAO.class.php";

		$nome = $_POST["nome"];
		$cpf = $_POST["cpf"];
		$rg = $_POST["rg"];
		$codCargo = $_POST["codCargo"];
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];


		$usuario = new Usuario( null, $nome, $cpf,$rg, $codCargo, $usuario, $senha);
		$acoes = new UsuarioDAO();
		if ($acoes->validaCPF($cpf)==true) {
			$acoes->inserir($usuario);
		}else{
			echo "<script language=javascript>alert( 'CPF invalido.' );</script>";	
			header("refresh:0; url=formulario.php");	
		}	
	}	
?>