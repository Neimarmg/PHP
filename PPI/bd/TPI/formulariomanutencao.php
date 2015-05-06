<?php
	require "validacao.php";
	include "classes/Usuario.class.php";
	include "classes/UsuarioDAO.class.php";

		$cpf = $_REQUEST["cpf"];
		
		$dao = new usuarioDAO();
		$dados = $dao->buscarDados($cpf);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Manutenção</title>
		<script language="JavaScript"> 
			function pergunta(){ 
    			if (confirm('Tem certeza que quer excluir este funcionario?')){ 
       				document.formularioManutencao.submit() 
    			} 
			} 
		</script>
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
					<form name="formularioManutencao" action="alterar.php" method="post">
		
						<label for="nome">NOME:</label>
						<input name="nome" id="nome" type="text" required value="<?php echo $dados->NOME_FUNC; ?>"/>

						<label for="cpf">CPF:</label>
						<input name="cpf" id="cpf" type="text" required value="<?php echo $dados->CPF; ?>"/>

						<label for="rg">RG:</label>
						<input name="rg" id="rg" type="text" required value="<?php echo $dados->RG; ?>"/>
				
						<label class="label" for="">Cargo:</label> 
						<imput class="func" name="codCargo" id="codCargo" type="text" required>
						
						<label for="usuario">USUARIO:</label>
						<input name="usuario" id="usuario" type="text" required value="<?php echo $dados->USUARIO; ?>"/>

						<label for="senha">SENHA:</label>
						<input name="senha" id="senha" type="password" required value="<?php echo $dados->SENHA; ?>"/>

						<input class="botao" type="button" value="Retornar" name="retornar" onclick="window.open('buscaUsuario.php','_parent')" /> 
						<input name="id" type="hidden" value="<?php echo $dados->COD_FUNC ?>" />
						<input class="botao" name="salvar" type="submit" value="Salvar" />
						<input class="botao" name="excluir" onclick="pergunta()" type="submit" value="Excluir" />
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