
<?php

class Usuario{
	private $id;
	public $nome;
	protected $email;
	private $senha;

	function __construct($id="", $nome="",$email="",$enha="123"){
		$this->id =$id;
		$this->nome =$nome;
		$this->email =$email;
		$this->senha =md5($senha);
	}
	
	Function __Set($prop, $valor){
		$this->prop = $valor;
	}
	
	function __get(prop){
		return $this->prop;
	}
	
	function __toString(){
		return 	"O usuário de id: ".$this->id.
				" se chama ".$this->nome.
				" com email ".$this->email.
				" e senha ".$this->senha; 
	}
	
}
?>