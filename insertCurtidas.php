<?php
//chama o arquivo de conexão com o bd
include('conectaPost.php');
 
 
// declaração de variáveis
//(,,','$_POST[link]','$_POST[categoria]','$_POST[dataDaPublicacao]')
///$titulo = $_POST['titulo'];
//$subtitulo = $_POST['subtitulo'];
///$texto = $_POST['texto'];

//$categoria = $_POST['categoria'];
///$dataDaPublicacao = $_POST['dataDaPublicacao'];

 
$up = mysql_query("UPDATE Post SET curtidas='1' WHERE titulo='$_POST[titulo]'");
 
if(mysql_affected_rows() > 0){
  echo "Sucesso: Atualizado corretamente!   ";
}else{
  echo "Aviso: Não foi atualizado!   ";
}
 