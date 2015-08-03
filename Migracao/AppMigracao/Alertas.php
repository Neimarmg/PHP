<?php

class validadaDados {
	
	public static $getResulQuery = 0;
	
	/*Função de retorno de resultado de execução de consulta sql*/
	public static function resultQuery($Query) {
		validadaDados::$getResulQuery = $Query;
		return validadaDados::$getResulQuery;
	}
		

	public static function registroExitente($ExibirModal) {
		utilitario::msgAlerta($ExibirModal, 'Registro já existe!');
	}
	
	
	public static function registradoComSucesso($ExibirModal, $desc) {
		utilitario::msgAlerta($ExibirModal, 'Cadastrado com sucesso '.$desc);
	}
	
	
	public static function registroNaoInserido($ExibirModal) {
		utilitario::msgAlerta($ExibirModal, 'Não foi possivél inserir o registro');
	}
}
?>
