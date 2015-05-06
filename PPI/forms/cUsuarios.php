<!DOCTYPE HTML>
<?php
	require_once '../class/conexao.php';
?>



<html>
<head>
	<title>Cadastro de cidades</title>
	<meta charset="ISO-8859-1">
	<style type="text/css"> @import "../css/geral.css" </style>
	<style type="text/css"> @import "../css/Usuario.css" </style>
	
</head>

<body>
	<main>
		<section id='cUsuario'>
			
			<form method="post" action="?go=Novo">
				
				<label class="label" for="Nivel">Nivél:</label> 
				<select name="codNivel" id="codNivel" type="text" required ="required"/>
					<option value="0">...</option>
					<?php 
						$sql = "select codNivelUsuario,nome from niveisusuarios order by nome";
						$result = mysql_query($sql);
						while ($fila = mysql_fetch_row($result)) {
							echo "<option value=".$fila['0'].">".$fila['1']."</option>";
						}					
					?>
				</select>	
				
				
				
				<br/> 
				
				<label class="label" for="usuario">Usuário:</label> 
				<input class="user" name="usuario" id="usuario" type="text" required/> 
				
				<br/> 
					
				<label class="label" for="senha">Senha:</label> 
				<input class="pas" name="senha" id="senha" type="password" required/> 
				
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
		
		validadaDados::ValidaCampo($codNivel = $_POST['codNivel']);
		validadaDados::ValidaCampo($usuario = $_POST['usuario']);
		validadaDados::ValidaCampo($senha = $_POST['senha']);
		
		/*Validação de campos obrigatórios*/
		if (validadaDados::$Contador > 0) {
			validadaDados::msgAlerta(false, null);
		
		}else{
			/*validade de usuario antes de inserir*/
			$query = mysql_num_rows(mysql_query("SELECT *FROM usuarios WHERE userNome ='$usuario'"));

			if ($query >= 1){
				validadaDados::msgAlerta(true,"<script>alert('Usuário ja existe!');</script>");				
				
			}else{				
				@mysql_query("INSERT INTO usuarios (codNivel, userNome, senha) VALUES ('$codNivel', '$usuario', '$senha')");
				validadaDados::msgAlerta(true,"<script>alert('Usuário cadastrado com sucesso!');</script>");
			}
		}
	}
	
?>



