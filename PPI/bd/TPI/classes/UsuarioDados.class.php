<?php

// herança utilizando a palavra extends para designar 
// que a classe UsuarioDados herda os atributos e métodos
// da classe Usuario
class UsuarioDados extends Usuario {

	// declaração de atributos da subclasse
	//private $tel;
	//private $end;

	// criação do construtor desta classe
	// recebe os parâmetros para a superclasse e para esta classe
	function __construct($id, $nome, $usuario, $senha/*, $tel, $end*/) {
		// chamada do construtor da superclasse
		// esquivale ao super() em Java
		parent::__construct($id, $nome, $usuario, $senha);
		//$this->tel = $tel;
		//$this->end = $end;
	}

	function __toString() {
		return "O usuário de id [".parent::$this->id."] se chama ".
			   $this->nome." com usuario ".parent::$this->usuario." e senha ".
			   $this->senha;// ." com telefone ".$this->tel." e endereço ".
			   //$this->end; 
	}
}

?>