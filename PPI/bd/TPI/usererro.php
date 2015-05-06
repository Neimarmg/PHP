<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN</title>
		<meta charset="utf-8"/>
			<style type="text/css">
					@import "CSS/usererro.css";
			</style>
	</head>
	<body>		
		<main>
			<section id='usererro'>			
				<label class="label1" for="usuario">Usuário e/ou senha inválida!</label>
				<?php
				header("refresh:5; url=login.php");	
				?>	
			</section>
		</main>
		
			<footer>
				<p>Todas as marcas registradas mencionadas aqui são propriedade de seus respectivos donos. <br>
				©2014 INFO soluções. Todos os direitos reservados.
				</p>
			</footer>
	</body>
</html>