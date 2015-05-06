<?php
	
	require "validacao.php";

	if(isset($_POST['salvar']))
	{

		include "classes/Usuario.class.php";
		include "classes/UsuarioDAO.class.php";

		$id = $_POST["id"];
		$nome = $_POST["nome"];
		$cpf = $_POST["cpf"];
		$rg = $_POST["rg"];
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];

		$usuario = new Usuario($id, $nome, $cpf, $rg, $usuario, $senha);

		echo "<script language=javascript>alert( 'Usuário $nome alterado com sucesso!' );</script>";	
		$acoes = new UsuarioDAO();
		if($acoes->alterar($usuario)) {
			header("refresh:3; url=main.php");
		}

	}
	if(isset($_POST['excluir']))
	{

		include "classes/UsuarioDAO.class.php";

		$cpf = $_REQUEST["cpf"];

		$acoes = new UsuarioDAO();
		if($acoes->excluir($cpf)) {
			header("refresh:1; url=main.php");
		}

	}

?>