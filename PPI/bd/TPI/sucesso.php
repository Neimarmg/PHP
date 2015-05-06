<?php
	require "validacao.php";
	include "classes/UsuarioDAO.class.php";
	include "classes/Usuario.class.php";
	$acoes = new UsuarioDAO();
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
				<h1>INFO</h1><h2>SOLUÇÕES</h2>
					<nav>
						<ul>
							<li><a href="main.php" class="atual">HOME</a></li>
							<li><a href="formulario.php">CADASTRO FUNCIONARIOS</a></li>
							<li><a href="#">INFORMATIVOS</a></li>
							<li><a href="#">MANUTENÇÃO CADASTRO</a></li>
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
				<article class="dados">
					<form >
						<table class="table" border="2" cellpadding="1" cellspacing="1" width="90%" BORDER RULES=rows>
  						 <tr bgcolor="#FFD700">			
   							 <td align="center">USUARIO INSERIDO</td>
  						</tr>
						</table>
						<table class="table" border="2" cellpadding="1" cellspacing="1" width="90%" BORDER RULES=rows>
  						 <tr bgcolor="#FFFFFF">			
   							 <td><?php $acoes->visualizarUltimoInserido();?></td>
  						</tr>
						</table>
						<h1 class="sucesso">Usuário inserido com sucesso!</h1>;
						
						<input class="botao" type="button" value="Retornar" name="retornar" onclick="window.open('formulario.php','_parent')" /> 
					</form>
				</article>
			</section>

			<section id="artigos">

			</section>

		</main>
			<footer>
				<p>Todas as marcas registradas mencionadas aqui são propriedade de seus respectivos donos. <br>
				©2014 INFO soluções. Todos os direitos reservados.
				</p>
			</footer>
	</body>
</html>