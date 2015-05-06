<?php

class BancoPDO {

	public $tipo = "mysql";
	public $host = "localhost";
	public $usuario = "root";
	public $senha = "";
	public $banco = "PI2";

	public $con = null;

	public function conexao() {

		try {

			// new PDO(dominio, usuario, senha);
			// dominio ===> mysql:host=localhost;dbname=pp1
			$this->con = new PDO($this->tipo.
				                 ":host=".$this->host.
				                 ";dbname=".$this->banco,
				                 $this->usuario,
				                 $this->senha);
			return $this->con;
		
		} catch(PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}

}

?>