<!DOCTYPE HTML>
<?php
	require_once 'class/conexao.php';
?>

<html>
<head>
	<title>Tela de loguin de usuário</title>
	<meta charset="ISO-8859-1">
	<style type="text/css"> @import "css/geral.css" </style>
	<style type="text/css"> @import "css/login.css" </style>
	
</head>

<body>
	<main>
		<section id='login'>
			
			<form action="autenticar.php" method="post">
				
				<label class="label" for="usuario">Usuário:</label> 
				<input class="user" name="usuario" id="usuario" type="usuario" required/> 
				
				<br/> 
				<br/> 
				
				<label class="label" for="senha">Senha:</label> 
				<input class="pas" name="senha" id="senha" type="password" required/> 
				
				<br/> 
				
				<input class="button" name="acao" type="submit" value="Entrar" />
			
			</form>
		
		</section>
	
	</main>
	<footer>
		<p>Todas os registro aqui são propriedade de seus respectivos donos. <br> ©2014 APL soluções. Todos os direitos reservados. </p>
	</footer>
</body>
</html>