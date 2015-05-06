<?php

include "BancoPDO.class.php";

class UsuarioDAO extends BancoPDO {

	public function __construct() {
		$this->conexao = BancoPDO::conexao();
	}

//************************************************************************************************************	   
	public function autenticar($usuario) {

		try {

			$stm = $this->conexao->prepare("SELECT * FROM funcionarios
												WHERE USUARIO = ? 
													AND SENHA = ?");
			$user = $usuario->USUARIO;
			$senha = $usuario->SENHA;

			$stm->bindValue(1, $user);
			$stm->bindValue(2, $senha);

			$stm->execute();
			
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

//************************************************************************************************************
	public function inserir($usuario) {

		try {
			
			$stm = $this->conexao->prepare("SELECT CPF
				                            FROM funcionarios 
				                            WHERE CPF = ?");
			$stm->bindValue(1, $usuario->CPF);
			$verifica = $stm->execute();

			if($stm->rowCount() == 0) {

				$stm = $this->conexao->prepare("INSERT INTO 
					                     	    funcionarios ( CPF, NOME_FUNC, RG ,COD_CARGO, SENHA, USUARIO) 
					                            VALUES (?, ?, ?, ?, ?)");
				$stm->bindValue(1, $usuario->CPF);
				$stm->bindValue(2, $usuario->NOME_FUNC);
				$stm->bindValue(3, $usuario->RG);
				$stm->bindValue(3, $usuario->COD_CARGO);
				$stm->bindValue(4, $usuario->SENHA);
				$stm->bindValue(5, $usuario->USUARIO);
							
				$stm->execute();
			
				echo "Dados recebidos: ".$usuario."<br/>";
				header('Location: sucesso.php');
				$ultimoinserido = $this->conexao->lastInsertId();	
				
			} else {
			
				echo "<script language=javascript>alert( 'Este usuario já está cadastrado.' );</script>";	
				header("refresh:0; url=formulario.php");
			}

		} catch(PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}
	}
//************************************************************************************************************
	public function visualizar($id = "") {

		try { 
			
			if($id == "") {
				$stm = $this->conexao->prepare("SELECT * FROM funcionarios");
			} else {
				$stm = $this->conexao->prepare("SELECT * FROM funcionarios WHERE COD_FUNC = ?");
				$stm->bindParam(1, $id, PDO::PARAM_INT);
			}

			$query = $stm->execute();

			if($query) {
				while($dados = $stm->fetch(PDO::FETCH_OBJ)) {
					echo "NOME: ".$dados->NOME_FUNC." | CPF: ".$dados->CPF."<br/>";
				}
			}

		} catch(PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}
//************************************************************************************************************
	public function visualizarUltimoInserido($id = "") {

		try { 
			
			if($id == "") {
				$stm = $this->conexao->prepare("SELECT * FROM funcionarios WHERE COD_FUNC = (SELECT max(COD_FUNC) FROM funcionarios)");
			}

			$query = $stm->execute();

			if($query) {
				while($dados = $stm->fetch(PDO::FETCH_OBJ)) {
					echo "Nome: ".$dados->NOME_FUNC."<br/>"." CPF: ".$dados->CPF."<br/>"."RG: ".$dados->RG."</br>";		
				}
			}

		} catch(PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}
//************************************************************************************************************
	public function excluir($cpf) {

		try {
			
			$stm = $this->conexao->prepare("DELETE FROM funcionarios WHERE CPF = ?");
			$stm->bindValue(1, $cpf);
			
			$query = $stm->execute();

			if($query) {
				echo "<script language=javascript>alert( 'Dados excluidos com sucesso.' );</script>";	
				header("refresh:0; url=main.php");			
				return true;
			} else {
				return false;
			}

		} catch (PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}
//***********************************************************************************************************
public function buscarDados($cpf="") {

		try {
				$stm = $this->conexao->prepare("SELECT * FROM funcionarios WHERE CPF = ?");
				$stm->bindValue(1, $cpf);
			
				$stm->execute();

				if ($stm->rowCount() > 0) {
					$dados = $stm->fetch(PDO::FETCH_OBJ);

					return $dados;	
				}
				else{			
					echo "<script language=javascript>alert( 'Usuário não encontrado' );</script>";	
					header("refresh:0; url=buscaUsuario.php");			
				}

		} catch (PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}
//***********************************************************************************************************
	public function alterar($usuario) {

		try {

			$stm = $this->conexao->prepare("UPDATE funcionarios SET NOME_FUNC = ?, CPF = ?, RG = ?, USUARIO = ?, SENHA = ? WHERE COD_FUNC = ?");
			$stm->bindValue(1, $usuario->NOME_FUNC);
			$stm->bindValue(2, $usuario->CPF);
			$stm->bindValue(3, $usuario->RG);
			$stm->bindValue(4, $usuario->USUARIO);
			$stm->bindValue(5, $usuario->SENHA);
			$stm->bindValue(6, $usuario->COD_FUNC);
			
			$query = $stm->execute();

			if($query) {
				return true;
			} else {
				return false;
			}

		} catch (PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}

	}	
public function validaCPF($cpf) {
 
    if(empty($cpf)) {
        return false;
    }

    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    if (strlen($cpf) != 11) {
        return false;
    }
    else if ($cpf == '00000000000' ||
        $cpf == '11111111111' ||
        $cpf == '22222222222' ||
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999') {
        return false;
     } else {  
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
}
}
?>