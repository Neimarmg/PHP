<?php

class validadaDados {
	
	public static $getResulQuery = 0;
	
	/*Fun��o de retorno de resultado de execu��o de consulta sql*/
	public static function resultQuery($Query) {
		validadaDados::$getResulQuery = $Query;
		return validadaDados::$getResulQuery;
	}
		

	public static function registroExitente($ExibirModal) {
		utilitario::msgAlerta($ExibirModal, 'Registro j� existe!');
	}
	
	
	public static function registradoComSucesso($ExibirModal, $desc) {
		utilitario::msgAlerta($ExibirModal, 'Cadastrado com sucesso '.$desc);
	}
	
	
	public static function registroNaoInserido($ExibirModal) {
		utilitario::msgAlerta($ExibirModal, 'N�o foi possiv�l inserir o registro');
	}
}
?>
