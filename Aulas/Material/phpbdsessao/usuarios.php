<?php
	
	// necessário realizar a chamada de inclusão das classes para
	// sua utilização na criação dos objetos
	include "classes/Usuario.class.php";
	include "classes/UsuarioDados.class.php";

	// criação de um objeto da classe Usuario passando parâmetros
	$u1 = new Usuario(3, "Paranauê da Silva", 
		                 "paranaue@silva.com", 
	    	             "lerolero");

	echo $u1;
	echo "<br/><br/>";

	// criação de um objeto da classe Usuario sem passagem de parâmetro
	$u2 = new Usuario();
	// informações passadas para o objeto a partir do __set() genérico da classe
	$u2->id = 5;
	$u2->nome = "Jeiso Oliveira";
	$u2->email = "jeiso@oliveira.com";
	$u2->senha = "testando";

	// impressão dos dados (equivale a chamada do __get())
	echo "Email: ".$u2->email;
	echo "<br/><br/>";

	// criação de um objeto de subclasse UsuarioDados com passagem de parâmetros 
	$u3 = new UsuarioDados(6, "Leôncio", "leo@cio.com", "lalala", "3344-5566", "Coronel Genuino");
		
	// impressão dos dados do objeto (chamada do toString())
	echo $u3;
?>