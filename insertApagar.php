<?php

$strcon = mysqli_connect("mysql669.umbler.com:41890","leandrodomingues","a36825700","ventodedeus") or die("Erro ao conectar ao banco de dados requisitado");
$nome = $_POST['titulo'];
$titulo = $_POST['tituloapagar'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];
$link = $_POST['link'];
$categoria = $_POST['categoria'];
$dataDaPublicacao = $_POST['dataDaPublicacao'];

$sql = "DELETE FROM Post WHERE titulo='$titulo'"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar excluir!   ");
echo "Excluído  ";
mysqli_close($strcon);

 		?>