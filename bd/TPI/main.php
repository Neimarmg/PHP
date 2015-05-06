<?php
	require "validacao.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Info solucoes</title>
		<meta charset="utf-8"/>
			<style type="text/css">
				@import "CSS/main.css";
			</style>
	</head>
	<body>
		<header>
			<div class='principal'>
				<h1>INFO</h1><h2>SOLUÇÕES</h2>
					<nav>
						<ul>
							<li><a href="#" class="atual">HOME</a></li>
							<li><a href="formulario.php">CADASTRO FUNCIONARIOS</a></li>
							<li><a href="listaFuncionarios.php">LISTA FUNCIONARIOS</a></li>
							<li><a href="buscaUsuario.php">MANUTENÇÃO CADASTRO</a></li>
							<li><a href="logout.php">SAIR</a></li>
						</ul>
					</nav>
			</div>
		</header>
		<main>
			<section id='login'>
				<article class="dadosusuario">
				<?php echo "Usuário: ".$_SESSION["nome"]; ?>
				<?php echo "Último login e tempo total logado: ".$_SESSION["datahora"];?>			
				</article>
			</section>
			<section id='global'>
				<article class="imagemPrincipal">
					<figure>
 					<img src="imagens/logo.jpg" alt="imagem" title="Logo" width="500" height="500" />
					</figure>
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
				©2014 INFO soluções. Todos os direitos reservados.
				</p>
			</footer>
	</body>
</html>


