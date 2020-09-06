<?php
// definições de host, database, usuário e senha
$host = "mysql669.umbler.com:41890";
$db   = "ventodedeus";
$user = "leandrodomingues";
$pass = "a36825700";


// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id, titulo, subtitulo, texto, link, dataDaPublicacao, imagens, categoria, identificacao FROM Post");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);

// calcula quantos dados retornaram
$total = mysql_num_rows($dados);

?>
