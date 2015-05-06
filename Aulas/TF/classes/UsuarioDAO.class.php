﻿<?php

include "BancoPDO.class.php";

class UsuarioDAO extends BancoPDO {

	public function __construct() {
		$this->conexao = BancoPDO::conexao();
	}

	/* função para autenticação, recebe o objeto de usuário e 
	   utiliza o email e senha digitados no formulário para consulta na base
	*/
	public function autenticar($usuario) {

		try {

			$stm = $this->conexao->prepare("SELECT * FROM FUNCIONARIOS 
											WHERE USUARIO = ? 
											AND SENHA = ?");

			$user = $usuario->usuario;
			$senha = $usuario->senha;

			$stm->bindValue(1, $user);
			$stm->bindValue(2, $senha);

			$stm->execute();

			/* utiliza a função rowCount() para verificar a quantidade de linhas retornadas
	   		   para verificar se usuário existe ou não na base, caso existir retorna o nome, senão
	   		   retorna null. */
			if($stm->rowCount() == 0) {
				return null;
			} else {
				$dados = $stm->fetch(PDO::FETCH_OBJ);
				return $dados->NOME_FUNC; 
			}

		} catch(PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}


	public function inserir($usuario) {

		try {
			
			$stm = $this->conexao->prepare("SELECT USUARIO
				                            FROM FUNCIONARIOS 
				                            WHERE USUARIO = ?");
			$stm->bindValue(1, $usuario->usuario);
			$verifica = $stm->execute();

			if($stm->rowCount() > 0) {
				echo "Este usuario já está cadastrado.";
			} else {
				$stm = $this->conexao->prepare("INSERT INTO 
					                     	    USUARIO (nome, usuario, senha) 
					                            VALUES (?, ?, ?)");

				// $email = $usuario->email;
				$stm->bindValue(1, $usuario->nome);
				$stm->bindValue(2, $usuario->usuario);
				$stm->bindValue(3, $usuario->senha);
							
				$stm->execute();

				echo "Último ID inserido: ".$this->conexao->lastInsertId()."<br/>";

				echo "Dados inseridos com sucesso.";

			}

		} catch(PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}
	}

	public function visualizar($id = "") {

		try { 
			
			if($id == "") {
				$stm = $this->conexao->prepare("SELECT * FROM usuarios");
			} else {
				$stm = $this->conexao->prepare("SELECT * FROM usuarios WHERE id = ?");
				$stm->bindParam(1, $id, PDO::PARAM_INT);
			}

			$query = $stm->execute();

			if($query) {
				while($dados = $stm->fetch(PDO::FETCH_OBJ)) {
					echo $dados->nome." com usuario ".$dados->usuario."<br/>";
				}
			}

		} catch(PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}
}

?>