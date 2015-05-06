<?php
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
				<h1>INFO</h1><h2>SOLUÇÕES</h2>
					<nav>
						<ul>
							<li><a href="main.php" class="atual">HOME</a></li>
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
				<article class="dados">
					<form action="cadastrar.php" method="post">
		
						<label for="nome">NOME:</label>
						<input name="nome" id="nome" type="text" required/>

						<label for="cpf">CPF:</label>
						<input name="cpf" id="cpf" type="text" required/>

						<label for="rg">RG:</label>
						<input name="rg" id="rg" type="text" required/>

						<label class="label" for="">Cargo:</label> 
							<select class="func" name="codCargo" id="codCargo" type="text" required>
									<option value="0">...</option>
								<?php
									$con = mysql_connect("localhost","root", "");
									$con = mysql_select_db("bd_site");
									$sql="select COD_CARGO, NOME from cargos order by NOME"; 
									$result = mysql_query($sql);
									while ($fila = mysql_fetch_row($result)) {
										echo "<option value=".$fila['0'].">".$fila['1']."</option>";
									}
								?>
							</select>	

						<label for="usuario">USUARIO:</label>
						<input name="usuario" id="usuario" type="text" required/>

						<label for="senha">SENHA:</label>
						<input name="senha" id="senha" type="password" required/>

						<input class="botao" name="acao" type="reset" value="Limpar" />
						<input class="botao" name="acao" type="submit" value="Cadastrar" />
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
				©2014 INFO soluções. Todos os direitos reservados.
				</p>
			</footer>
	</body>
</html>