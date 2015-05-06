<?php

// verifica se o botão acao de login foi acionado
if(isset($_POST["acao"])) {

	// inclui a chamada para as classes que serão 
	// usadas na instância de objetos posteriormente
	include "classes/Usuario.class.php";
	include "classes/UsuarioDAO.class.php";

	// recupera as informações enviadas por métodos POST 
	// digitadas nos campos do formulário em login.php
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	// cria objeto da classe usuário passando apenas as informações necessárias
	$usuario = new Usuario(null, null, null, null, $usuario, $senha);
	// cria um objeto para manipulação dos dados da entidade Usuario
	$dao = new UsuarioDAO();

	// chama o método de autenticação e verifica se o retorno é nulo ou possui valor
	if(($retorno = $dao->autenticar($usuario)) == null) {
		//echo "Usuário e/ou senha inválida.";
		header("Location: usererro.php");
		//header("refresh:5; url=login.php");
	} else {
		// caso possuir valor, cria a sessão armazenando informações 
		// em variáveis de sessãoss
		session_start();
		$_SESSION["id"] = session_id();
		$_SESSION["nome"] = $retorno;
		$_SESSION["datahora"] = date("d/m/Y H:i:s");
		header("Location: main.php");	
	}

}

?>