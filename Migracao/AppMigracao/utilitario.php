<meta charset="ISO-8859-1">
<?php
class utilitario {

	public static $getResult;
	
	
	/*Fun��o de impress�o de mensagems de alerta gerais retorna uma mensage padr�o ou uma msg personalizada*/
	public static  function msgAlerta($ExibirModal, $msg){
		if($ExibirModal == false) {
			echo "<BR>$msg</BR>";			
		} else{
			echo "<script>alert('$msg')</script>";
		}				
	}	
}

?>
