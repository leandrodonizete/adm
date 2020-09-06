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

 
$up = mysql_query("UPDATE Post SET titulo='$_POST[titulo]',  autor='$_POST[autor]', subtitulo='$_POST[subtitulo]', texto='$_POST[texto]', id='$_POST[id]', categoria='$_POST[categoria]', dataDaPublicacao='$_POST[dataDaPublicacao]', imagens='$_POST[imagens]' WHERE id='$_POST[id]'");
 
if(mysql_affected_rows() > 0){
  echo "Sucesso: Atualizado corretamente!   ";
}else{
  echo "Aviso: Não foi atualizado!   ";
}
 
mysql_close($conexao);
					?>