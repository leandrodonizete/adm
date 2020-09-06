<?php

$host = "mysql669.umbler.com:41890";
$db   = "ventodedeus";
$user = "leandrodomingues";
$pass = "a36825700";

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("$host", "$user", "$pass");
  mysql_select_db("ventodedeus");
  $sql = "SELECT imagens FROM Post WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['imagens'];
?>