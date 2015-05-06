<!DOCTYPE HTML>
<?php
	require_once '../class/conexao.php';
	//SELECT `codFunc`, `nome`, `rg`, `cpf`, `codCidade`, `codCargo` FROM `funcionarios` WHERE 1
?>
<html>
<head>
	<title>Cadastro de funcionarios</title>
	<meta charset="ISO-8859-1">
	<style type="text/css"> @import "../css/geral.css" </style>
	<style type="text/css"> @import "../css/Func.css" </style>
	
</head>

<body>
	<main>
		<section id='cFunc'>
			
			<form method="post" action="?go=Novo">
				
				<label class="label" for="nome">Nome:</label> 
				<input class="func" name="nome" id="nome" type="text" required/> 	
				
				<br/> 
				
				<label class="label" for="rg">Rg:</label> 
				<input class="func" name="rg" id="rg" type="text" required/> 				
				
				<br/> 					
				
				<label class="label" for="Cpf">Cpf:</label> 
				<input class="func" name="cpf" id="" type="cpf" required/> 
				
				<label class="label" for="">Cargo:</label> 
				<select class="func" name="codCargo" id="codCargo" type="text" required>
					<option value="0">...</option>
					<?php 
						
						$sql = "select codCargo, nome from cargo order by nome"; 
						$result = mysql_query($sql);
						while ($fila = mysql_fetch_row($result)) {
							echo "<option value=".$fila['0'].">".$fila['1']."</option>";
						}
					?>
				</select>	
				
				<br/> 	
				
				<label class="label" for="">Cidade:</label> 
				<select class="func" name="codCidade" id="codCidade" type="text" required>
					<option value="0">...</option>
					<?php 											
						$sql = "select codCidade, nome from cidades order by nome";
						$result = mysql_query($sql);
						while ($fila = mysql_fetch_row($result)) {
							echo "<option value=".$fila['0'].">".$fila['1']."</option>";
						}
					?>
				</select>	
				
				<br/> 					
				
				<input class="button" type="submit" value="Novo" id="cUsuario" />
				<input class="button" type="submit" value="Editar" id="cUsuario1" />
				<input class="button" type="submit" value="Apagar" id="cUsuario2" />
				<input class="button" type="submit" value="Salvar" id="cUsuario3" />
			
			</form>		
		</section>	
	</main>		
</body>	
</html>

<?php	
	/*Insersão de novo usuario*/
	include_once '../class/validadaDados.php';
	
	if (@$_GET['go'] == 'Novo'){
		
		validadaDados::ValidaCampo($nome = $_POST['nome']);
		validadaDados::ValidaCampo($rg = $_POST['rg']);
		validadaDados::ValidaCampo($cpf = $_POST['cpf']);
		validadaDados::ValidaCampo($codCargo = $_POST['codCargo']);
		validadaDados::ValidaCampo($CodCidade = $_POST['codCidade']);
		
		/*Validação de campos obrigatórios*/
		if (validadaDados::$Contador > 0) {
			validadaDados::msgAlerta(false, null);
		
		}else{
			/*validade de usuario antes de inserir*/
			$query = mysql_num_rows(mysql_query("SELECT *FROM funcionarios WHERE cpf ='$cpf'"));

			if ($query >= 1){
				validadaDados::msgAlerta(true,"<script>alert('Cpf ja existe!');</script>");				
				
			}else{			
				@mysql_query("INSERT INTO funcionarios (nome, rg, cpf, codCargo, codCidade) VALUES ('$nome', '$rg', '$cpf', '$codCargo', '$codCidade')");
				validadaDados::msgAlerta(true,"<script>alert('Usuário cadastrado com sucesso!');</script>");
			}
		}
	}
?>