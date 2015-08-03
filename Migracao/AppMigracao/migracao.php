
<?php 
	include_once '../AppMigracao/conexao.php';	
	include_once '../AppMigracao/Alertas.php';
	include_once '../AppMigracao/utilitario.php';

class  migrabd{
	
	/*Método de execução de inserts*/
	public static function InsereRegistros($sql, $tab) {		
		
		$result = mysql_query($sql);		
		while ($col = mysql_fetch_row($result)) {
			$Tab = array($col[0]);
			switch ($tab){
							
				case "cores":
					@mysql_query("INSERT INTO cores (titulo) VALUES ('$Tab[0]')");
					break;
				
				case "produtos":
					$Tab = array($col[0], $col[1]);						
					@mysql_query("INSERT INTO produtos(codigo, titulo) VALUES ('$Tab[0]','$Tab[1]')");
					break;
						
				case "produtos_cores":
					$Tab = array($col[0], $col[1]);
					@mysql_query("INSERT INTO produtos_cores(id_cor, id_produto) VALUES ('$Tab[0]','$Tab[1]')");
					break;
			
				case "tamanhos":
					$Tab = array($col[0]);						
					@mysql_query("INSERT INTO tamanhos(titulo) VALUES ('$Tab[0]')");
					break;
				
				case "produtos_tamanhos":
					$Tab = array($col[0], $col[1]);
					@mysql_query("INSERT INTO produtos_tamanhos(id_produto_cor, id_tamanho) VALUES ('$Tab[0]','$Tab[1]')");
					break;
			}			
		}		
	}

	
	/*Valida resgistros após a insersão na tabela destino*/
	public static function validaInsersao($tabOrigen, $tabDestino, $tab) {
		if (mysql_num_rows(mysql_query($tabOrigen)) != mysql_num_rows(mysql_query($tabDestino))){
			validadaDados::registroNaoInserido(false);
		}else{
			validadaDados::registradoComSucesso(false, 'na tabela '.$tab.' '.validadaDados::$getResulQuery.' Registros');
		}		
	}
	
	
	/*Informa se os registos ja foram inseridos*/
	public static function informaRegistroExistente($tab){
		utilitario::msgAlerta(false, '--------------------------------------------');
		utilitario::msgAlerta(false, 'Não foi possivel inserir registros na tabelas "'.$tab.'"');
		validadaDados::registroExitente(false);
	}
	
	
	/*Método de carregador parametros*/
	public static function parametros($tabOrigen, $tabDestino, $tab) {		
		validadaDados::resultQuery((mysql_num_rows(mysql_query($tabOrigen)) - mysql_num_rows(mysql_query($tabDestino))));
		
		if (validadaDados::$getResulQuery > 0){
			migrabd::InsereRegistros($tabOrigen, $tab);
			migrabd::validaInsersao($tabOrigen, $tabDestino, $tab);
				
		}else{
			migrabd::informaRegistroExistente($tab);			
		}
	}
}
	
?>