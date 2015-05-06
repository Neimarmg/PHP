<!DOCTYPE HTML>
<?php
	require_once '../class/conexao.php';
?>

<html>
<head>
	<title>Cadastro de cidades</title>
	<meta charset="ISO-8859-1">
	<style type="text/css"> @import "../css/geral.css" </style>
	<style type="text/css"> @import "../css/cUsuario.css" </style>
	
</head>

<body>
	<main>
		<section id='cUsuario'>
			
			<form method="post" action="?go=Novo">
				
				<label class="label" for="uf">UF:</label> 
				<select class="user" name="codEstado" id="CodEstado" type="text" required>
					<option value="0">...</option>
					<?php 
						$sql = "select codUf,Uf,estado from ufs order by Uf";
						$result = mysql_query($sql);
						while ($fila = mysql_fetch_row($result)) {
							echo "<option value=".$fila['0'].">".$fila['1']." |".$fila['2']."</option>";
						}					
					?>
				</select>	
							
			</form>
		
		</section>	
	</main>		
</body>	
</html>