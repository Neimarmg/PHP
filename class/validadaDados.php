<meta charset="ISO-8859-1">
<?php

class validadaDados {
	
	public static $Contador = 0;

	/*Fun��o de contagem de campo embraco retorna a quantidade de campos obrigat�rios n�o prenchidos*/
	public static function ValidaCampo($ValorCampo) {
		 if (empty($ValorCampo)) {
			validadaDados::$Contador++;
		 }
		 return validadaDados::$Contador;
	}
	
	/*Fun��o de impress�o de mensagems de alerta gerais retorna uma mensage padr�o ou uma msg personalizada*/
	public static  function msgAlerta($novaMsg, $msg){
		if($novaMsg == true) {
			echo  ($msg);			
		} else{
			echo "<script>alert('Existem campos que n�o foram preechidos!')</script>";
		}				
	}	
}
?>



