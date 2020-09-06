<?php
	$servidor1 = "mysql669.umbler.com:41890";
	$usuario1 = "leandrodomingues";
	$senha1 = "a36825700";
	$dbname1 = "ventodedeus";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor1, $usuario1, $senha1, $dbname1);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>