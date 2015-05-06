<!DOCTYPE html>
<html> 
<head>
	<title>Formulário de cadastro</title>

	<style type="text/css">
		body { font-family: arial; }
		input { margin-bottom: 20px; border: 1px solid #999; }
		input, label { display: block; }
	</style>
		
</head>
<body>

	<form action="cadastrar.php" method="post">
		
		<label for="nome">Nome:</label>
		<input name="nome" id="nome" type="text" required/>

		<!-- type do tipo "email" valida sintaxe -->
		<label for="email">Email:</label>
		<input name="email" id="email" type="email" required/>

		<label for="senha">Senha:</label>
		<input name="senha" id="senha" type="password" required/>

		<input name="acao" type="submit" value="Cadastrar" />
	

	</form>

</body>
</html>