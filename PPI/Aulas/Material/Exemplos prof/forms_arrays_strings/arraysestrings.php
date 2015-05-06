<?php

	// arrays com índice numérico
	// convencional
	$vetor[] = "zero";
	$vetor[] = "um";
	$vetor[] = "dois";
	$vetor[] = "tres";
	echo "vetor[2]: ".$vetor[2]."<br/>";
	
	// utilizando o método array()
	$b = array("zero", "um", "dois", "tres");
	echo "b[2]: ".$b[2]."<br/>";

	// arrays com índice associativo
	$a["nome"] = "Aline";
	$a["sobrenome"] = "de Campos";
	echo $a["nome"]." ".$a["sobrenome"]."<br/>"; 

	// array mesclando chaves numéricas e associativas
	$c = array("zero", "um", "dois", "nome"=>"Joao");
	echo "c[2]: ".$c[2]."<br/>";
	// echo "c[3]: ".$c[3]."<br/>";
	echo "c['nome']: ".$c["nome"];
	
	// arrays multidimensionais
	// matrizes
	$andar[1][101] = "Jose da Silva";
	$andar[1][105] = "Ana Maria";
	$andar[2][210] = "Mara Soares";
	$andar[2][211] = "Darci Fernandes";
	$andar[3][301] = "Finck";	
	
	echo $andar[1][101]."<br>";
	echo $andar[2][211]."<br>";
	
	// array multidimensional
	echo "Vetor multidimensional: <br/>";
	for($i=0; $i<5; $i++) {
		for($j=0; $j<2; $j++) {
			$v[$i][$j] = $i*$j;	
			echo "v[".$i."][".$j."] = ".$v[$i][$j]." "; 
		}
		echo "<br/>";
	}
	
	// outro exemplo de array multidimensional
	$produtos = array();
	$produtos[] = array(0=>'001',1=>'Arroz');
	$produtos[] = array(0=>'002',1=>'Feijão');
	$produtos[] = array(0=>'003',1=>'Farinha');
	$produtos[] = array(0=>'004',1=>'Açúcar');
	$produtos[] = array(0=>'005',1=>'Sal');	
	
	echo $produtos[1][0]."–".$produtos[1][1]."<br/>";
	echo $produtos[3][0]."–".$produtos[3][1]."<br/>";
	
	$n = array(10, 2, 1, 15, 23, 0);
	$s = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" => "melancia");

	print_r(array_values($n));
	echo "<br/>";

	// ordenar os valores alfabeticamente
	asort($s);	
	foreach($s as $chave => $valor)
		echo $chave." = ".$valor."<br/>";
	
	// ordenar os valores alfabeticamente reversa	
	arsort($s);
	foreach($s as $chave => $valor)
		echo $chave." = ".$valor."<br/>";
	
	// ordenar por chave	
	ksort($s);
	foreach($s as $chave => $valor)
		echo $chave." = ".$valor."<br/>";

	// ordenar por chave reversa
	krsort($s);
	foreach($s as $chave => $valor)
		echo $chave." = ".$valor."<br/>";
		
	echo "Elementos no array: ".count($s)."<br/>";

	list($limao, $melancia, $banana, $laranja) = $n;
	echo "=> ".$melancia."<br/>";
	
	
	$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
	$pieces = explode(" ", $pizza);
	
	echo $pieces[0]."<br/>"; // piece1
	echo $pieces[1]."<br/>"; // piece2


	// Example 2
	$data = "foo:*:1023:1000::/home/foo:/bin/sh";
	list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
	echo $user."<br/>"; // foo
	echo $pass."<br/>"; // *
	
	
	$p = array("piece1", "piece2", "piece3", "piece4", "piece5", "piece6");
	$pizza = implode("*", $p);
	echo $pizza."<br/><br/>";
	
	$q = "aula de programação para Internet    ";
	echo "*".$q."*<br/>";
	echo "*".trim($q)."*<br/>";
	echo strrev($q)."<br/>";
	echo strtolower($q)."<br/>";
	echo strtoupper($q)."<br/>";
	echo ucfirst($q)."<br/>";
	echo ucwords($q)."<br/>";
					 // o que, por o que, onde?
	echo str_replace("para", "LEROLERO", $q)."<br/>";
	echo str_pad($q, 100, "*")."<br/>";
	echo str_repeat("%", 50)."<br/>";
	echo str_shuffle($q)."<br/>";
	echo chr(231)."<br/>";
	echo ord("ç")."<br/>";
	echo strlen($q)."<br/>";
		
	$s1 = "oi";
	$s2 = "tchau";
	echo strcmp($s1, $s2)."<br/>";	
	
	$str = "abcdef"; // Positivo
	echo substr($str, 1)."<br/>"; // Retorna "bcdef"
	echo substr($str, 1, 3)."<br/>"; // Retorna "bcd"
	
	
?>