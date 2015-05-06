<?php

	// Restrição para apenas receber 
	// valores pelo formulário
	if(isset($_POST["acao"])) {
		
		// Verifição das informações recebidas
		// no formato de array com print_r
		echo "Informações recebidas (print_r): ";
		print_r($_POST);
		echo "<br/><br/>";

		// Verifição das informações recebidas
		// no formato de array mais detalhado com var_dump
		echo "Informações recebidas (var_dump): ";		
		var_dump($_POST);
		echo "<br/><br/>";
		
		// Receber a informação de um input text
		$nome = $_POST["nome"];		
		echo "Nome completo: ".$nome."<br/>";
		
		$senha = $_POST["senha"];
		echo "Senha: ".$senha."<br/>";
		// Criptografia simples utilizando algoritmo md5
		// Esse algoritmo não é reversível
		$senhacrip = md5($senha);
		echo "Senha Criptografada: ".$senhacrip."<br/>";
		
		// Receber a informação de radio button
		$sexo = $_POST["sexo"];
		
		// Verifição condicional convencional
		if($sexo == "F")
			echo "Sexo: Feminino <br/>";
		else 	
			echo "Sexo: Masculino <br/>";
			
		// Verifição condicional ternária	
		$s = $sexo == "F" ? "Feminino" : "Masculino";	
		echo "Sexo: ".$s."<br/>";
		
		// Receber a informação de checkbox em um array
		$turno = $_POST["turno"];
		// Percorrer o vetor buscando cada informação		
		$i = 0;
		while($i < count($turno)) {
			echo "Turno: ".$turno[$i]."<br/>";
			$i++;
		}
				
		// Receber dados de um select/combobox		
		$estado = $_POST["estado"];
		echo "Estado: ".$estado."<br/>";
		$cidade = $_POST["cidade"];
		echo "Cidade: ".$cidade."<br/>";
		
		// Receber dados de um textarea	
		$descricao = $_POST["descricao"];
		echo "Descrição: ".$descricao."<br/>";
		
		
		
	} else {
		echo "Acesso negado.";
	}

?>