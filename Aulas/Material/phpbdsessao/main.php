<?php
	
	// inclui o arquivo responsável por fazer a validação de sessão ativa
	require "validacao.php";

	echo "Bem vindo ".$_SESSION["nome"]." seu ID é ".$_SESSION["id"].
     " e você logou em ".$_SESSION["datahora"];

  	echo "<br><br><a href='logout.php'>SAIR</a>";


?>