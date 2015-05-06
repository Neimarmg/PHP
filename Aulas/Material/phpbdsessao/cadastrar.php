<?php
	
	// verifica se as informações vieram 
	// através do método POST
	if(isset($_POST))
	{

		// chamada da classe para instância
		include "classes/Usuario.class.php";
		include "classes/UsuarioDAO.class.php";

		// recebe os valores vindos do formulário através de post
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		// instancia um objeto do tipo Usuario passando informações pelo construtor
		$usuario = new Usuario(null, $nome, $email, $senha);
		echo "Dados recebidos: ".$usuario."<br/>";

		$acoes = new UsuarioDAO();

		if($acoes)
			echo "Conexão foi estabelecida.<br/>";

		$acoes->inserir($usuario);

		echo "<h1>Visualizar todos os usuários da base</h1>";
		$acoes->visualizar();

		echo "<h1>Visualizar registro específico</h1>";
		$acoes->visualizar(3);

	}
	
?>