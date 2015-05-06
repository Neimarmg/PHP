<?php
	include "Usuario.class.php";

	@u1 = new Usuario(3,"Paranaue da silva", paranaue@Silva.com,"lelero");
	echo "Impressão de objeto: ".$u1."<br/>";
	
	$u2 = new Usuario();
	$u2->id =2;
	$u2->nome ="Tiburcio";
	$u2->email = "@tito@gmail.com";
	$u2->Senha = "dada"
	
	echo "Impressão de objeto: ".$u2."<br/>";
	echo "Impressão de objeto: ".$u2->nome."<br/>";
?>