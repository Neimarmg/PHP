<?php
	
	// inclui o arquivo responsável por fazer a validação de sessão ativa
	require "validacao.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulário de cadastro</title>
		<meta charset="utf-8"/>
			<style type="text/css">
				@import "CSS/main.css";			
			</style>
	</head>
	<body>

		<header>
			<div class='principal'>
				<h1>ELFO</h1><h2>SOLUÇÕES</h2>
					<nav>
						<ul>
							<li><a href="main.php" class="atual">HOME</a></li>
							<li><a href="formulario.php">CADASTRO FUNCIONARIOS</a></li>
							<li><a href="#">CADASTRO FUNCIONARIOS</a></li>
							<li><a href="#">RELATORIOS</a></li>
							<li><a href="logout.php">SAIR</a></li>
						</ul>
					</nav>
			</div>
		</header>

		<main>

			<section id='global'>
				<article class="dados">
					<form action="cadastrar.php" method="post">
		
						<label for="nome">NOME:</label>
						<input name="nome" id="nome" type="nome" required/>

						<label for="cpf">CPF:</label>
						<input name="cpf" id="cpf" type="cpf" required/>

						<label for="rg">RG:</label>
						<input name="rg" id="rg" type="rg" required/>

						<label for="usuario">USUARIO:</label>
						<input name="usuario" id="usuario" type="usuario" required/>

						<label for="senha">SENHA:</label>
						<input name="senha" id="senha" type="password" required/>

						<input name="acao" type="submit" value="Cadastrar" />
	
					</form>
				</article>
			</section>

			<section id="artigos">
				<article class="texto1">
					
				<article class="texto2">
					
				<article class="publicidade">

				</article>
			</section>

		</main>
			<footer>
				<p>Todas as marcas registradas mencionadas aqui são propriedade de seus respectivos donos. <br>
				©2014 Elfo soluções. Todos os direitos reservados.
				</p>
			</footer>
	</body
</html>


