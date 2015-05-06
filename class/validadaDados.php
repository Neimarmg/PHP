<meta charset="ISO-8859-1">
<?php

class validadaDados {
	
	public static $Contador = 0;

	/*Função de contagem de campo embraco retorna a quantidade de campos obrigatórios não prenchidos*/
	public static function ValidaCampo($ValorCampo) {
		 if (empty($ValorCampo)) {
			validadaDados::$Contador++;
		 }
		 return validadaDados::$Contador;
	}
	
	/*Função de impressão de mensagems de alerta gerais retorna uma mensage padrão ou uma msg personalizada*/
	public static  function msgAlerta($novaMsg, $msg){
		if($novaMsg == true) {
			echo  ($msg);			
		} else{
			echo "<script>alert('Existem campos que não foram preechidos!')</script>";
		}				
	}	
}
?>



