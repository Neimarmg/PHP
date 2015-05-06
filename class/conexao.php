<meta charset="ISO-8859-1">
<?php
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = 'neimar';
	$bd = 'bds';

	$conexao = @mysql_connect($sevidor,$usuario,$senha) or die ("Erro ao conectar com o servidor");
	
	if ($sql =  mysql_selectdb($bd, $conexao)) {
		//echo "Conexão estabelecida com sucesso";
	} else {
		echo "Erro a conectar com banco";
	}
	//https://www.youtube.com/watch?v=DhFIWOstOJ4
?>

