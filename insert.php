

<?php

$host = "mysql669.umbler.com:41890";
$db   = "ventodedeus";
$user = "leandrodomingues";
$pass = "a36825700";

//$dat= "new Date()";

$connection=mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno())
  {
  echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO Post (titulo, subtitulo, texto, categoria, dataDaPublicacao, imagens, autor, NomeDoBlog, id)
VALUES
('$_POST[titulo]','$_POST[subtitulo]','$_POST[texto]','$_POST[categoria]','$_POST[dataDaPublicacao]','$_POST[imagens]','$_POST[autor]','$_POST[NomeDoBlog]','$_POST[id]')";
//A instrução POST recupera os dados do formulário.
if (!mysqli_query($connection,$sql))
  {
  die('Erro: ' . mysqli_error($connection));
  }
  
else
echo "1 registro inserido.     ";
 
mysqli_close($connection);
//Este comando fecha a conexão ao banco de dados ao final.
?>