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
	protected $usuario;
	private $senha;

	// construtor é definido pela palavra reservada __construct
	// pode ou não ter parâmetros
	// para um construtor poder não receber parâmetros deve-se
	// definir valores padrão como neste exemplo
	function __construct($id="", $nome="", $usuario="", $senha="") {
		// associação de valores
		// usa-se o -> para unir o objeto e o atributo
		$this->id = $id;
		$this->nome = $nome;
		$this->usuario = $usuario;
		// md5() faz a criptografia de dados
		$this->senha = $senha;
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
		return "O usuário de id [".$this->id."] se chama ".
			   $this->nome." com usuario ".$this->usuario." e senha ".
			   $this->senha; 
	}

}
	

?>