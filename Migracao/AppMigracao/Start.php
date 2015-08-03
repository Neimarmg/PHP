
<?php
	include_once '../AppMigracao/conexao.php';
?>

<?php
	/*Definição da parametrização das tabelas para migração de dados */

	include_once '../AppMigracao/migracao.php';
	include_once '../AppMigracao/utilitario.php';
	
	
	$sqlOrigem ="SELECT DISTINCT cor FROM dados_antigos";
	$sqlDestino = "SELECT * FROM cores";
	migrabd::parametros($sqlOrigem ,$sqlDestino, "cores");			
	
	
	$sqlOrigem ="SELECT DISTINCT codigo, titulo FROM dados_antigos";
	$sqlDestino ="SELECT * FROM produtos";
	migrabd::parametros($sqlOrigem,$sqlDestino, "produtos");			
	
	
	$sqlOrigem ="SELECT DISTINCT tamanho FROM dados_antigos";
	$sqlDestino ="SELECT * FROM tamanhos";
	migrabd::parametros($sqlOrigem,$sqlDestino, "tamanhos");
	
	
	$sqlOrigem ="SELECT distinct cores.codigo, dados_antigos.codigo FROM dados_antigos LEFT JOIN cores on dados_antigos.cor = cores.titulo";
	$sqlDestino ="SELECT * FROM produtos_cores";
	migrabd::parametros($sqlOrigem,$sqlDestino, "produtos_cores");
	
	
	$sqlOrigem ="SELECT distinct produtos_cores.id_cor ,tamanhos.titulo	FROM dados_antigos 		
		LEFT JOIN produtos_cores on dados_antigos.codigo = produtos_cores.id_produto		    
		LEFT JOIN tamanhos on dados_antigos.tamanho = tamanhos.titulo";	
	$sqlDestino ="SELECT * FROM produtos_tamanhos";
	migrabd::parametros($sqlOrigem,$sqlDestino, "produtos_tamanhos");
	
?>