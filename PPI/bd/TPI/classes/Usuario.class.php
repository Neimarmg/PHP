<?php

// declaração de classe
class Usuario {

	// declaração de atributos
	// encapsulamento:
	// private = apenas na classe
	// protected = na classe e nas subclasses
	// public = aberta
	private $id;
	public $nome;
	public $cpf;
	public $RG;
	public $codCargo;
	protected $usuario;
	private $senha;
	public $estado;
	public $cidade;

	// construtor é definido pela palavra reservada __construct
	// pode ou não ter parâmetros
	// para um construtor poder não receber parâmetros deve-se
	// definir valores padrão como neste exemplo
	function __construct($id="", $nome="", $cpf="", $rg="", $codCargo="", $usuario="", $senha="", $estado="", $cidade="") {
		// associação de valores
		// usa-se o -> para unir o objeto e o atributo
		$this->COD_FUNC = $id;
		$this->NOME_FUNC = $nome;
		$this->CPF = $cpf;
		$this->RG = $rg;
		$this->codCargo =$codCargo;
		$this->USUARIO = $usuario;
		// md5() faz a criptografia de dados
		$this->SENHA = $senha;
		$this->ESTADO = $estado;
		$this->CIDADE = $cidade;
	}

	// "método mágico" para criação de set genérico
	// ou seja, cria um set que pode ser usado por todos os atributos
	function __set($prop, $val) {
		$this->$prop = $val;
	}

	// "método mágico" para criação de get genérico
	// ou seja, cria um get que pode ser usado por todos os atributos
	function __get($prop) {
		return $this->$prop;
	}

	// método para impressão de dados do objeto
	
	function __toString() {
		return "O usuário de id [".$this->COD_FUNC."] se chama ".
			   $this->NOME_FUNC." com usuario ".$this->USUARIO." e senha ".
			   $this->SENHA; 
	}
	
}
	

?>